<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Department;
use App\Models\Attendance;
use App\Models\Designation;
use DB;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        // dd(Auth::user()->role);
        $user = DB::table("users")
       
        ->select(   'users.*',
                
            )
        ->where('users.id', Auth::user()->id) // Filter by the specific ID
    ->first();
  
        if(Auth::user()->role == "admin") {
            return view('profile.edit', [
                'user' => $request->user(),
            ]);
        }else{
            return view('employee.profile.edit',[
                'user' => $request->user(),
                
            ]);
        }
       
        
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        // Update user data
        // dd($request->all());
        $user = $request->user();
        $user->fill($request->validated());

        // Check if email was updated and mark email as unverified
        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        // Handle profile picture upload
        if ($request->hasFile('picture')) {
            // Delete the old picture if exists
            if ($user->picture) {
                @unlink(public_path('user/img/' . $user->picture));
            }

            // Get the uploaded file
            $file = $request->file('picture');

            // Define the file name and destination path
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('user/img/'), $filename);

            // Update the user's picture field
            $user->picture =  $filename;
        }

        // Save the user's updated data
        $user->save();

        // Redirect with a success message
        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function userUpdate(Request $request, $id = null){
        // dd($request->all());
        $id = $request->input('id');
        $validatedData = $request->validate([
            'picture' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'firstName' => 'nullable|string',
            'lastName' => 'nullable|string',
            'username' => 'nullable|string',
            'email' => 'nullable|string',
            'phone' => 'nullable|string',
            'experience' => 'nullable|string',
            'dob' => 'nullable|string',
            'qualification' => 'nullable|string',
            'address' => 'required|string',
            
        ]);
        dd($validatedData);
        if($id){
            $setting = User::findOrFail($id);
            if ($request->hasFile('picture')) {
                // Delete the old logo if it exists (optional)
                if ($setting->picture) {
                    @unlink(public_path('user/img/' . $setting->picture));
                }
                $filename = time() . '_' . $request->file('picture')->getClientOriginalName();
                $request->file('picture')->move(public_path('user/img/'), $filename);
                $validatedData['picture'] = $filename;
                // dd($validatedData['employee']);
            }
           
            $setting->update($validatedData);
        }else {
            // Create new company
            $setting = User::create($validatedData);
        }
        return redirect()->back()->with('success', 'User Profile Update Successfully.');
    }
}
