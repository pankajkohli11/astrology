<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    public function index(){
        $users = User::latest()->get();
        // dd($users);
        return view('admin.users.usersList',[
            'users' => $users
        ]);
    }

    public function create(){
        return view('admin.users.addUserForm');
    }

    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'firstName' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'firstName' => $request->firstName,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json(['success'=>'Category added successfully...']);
    }

    public function edit($encryptedId){
        
        try {
            $id = Crypt::decrypt($encryptedId);
            $user = User::findOrFail($id);
            // dd($user);
            // Pass the user data to the edit view
            return view('admin.users.editUserForm', compact('user'));
        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
            abort(404); // Handle the error if decryption fails
        }
    }

    public function update(Request $request){
        // dd($request->all());
        $data = $request->validate([
            'firstName' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|string|max:255',
        ]);
        $user = User::findOrFail($request->id);
        $user->update($data);
        return response()->json(['success'=>'User updated successfully...']);
    }

    public function delete($id){
        $data = User::findOrFail($id);
        $data->delete();
        return response()->json(['success' => 'Data deleted successfully.']);
    }
}
