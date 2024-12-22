<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
class SliderController extends Controller
{
    public function index(){
        $slider = Slider::latest()->get();
        // dd($slider);
        return view('admin.slider.sliderList',[
            'slider' => $slider
        ]);
    }

    public function create(){
        return view('admin.slider.addSliderForm');
    }

    public function store(Request $request){
       
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string|max:1000',
        ]);
         // Handle file upload
         // Handle file upload and save with the original name
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName(); // Prefix with timestamp to ensure uniqueness
        $imagePath = $image->storeAs('sliders/img', $imageName, 'public'); // Save in the 'public/sliders' directory
    }
        //  dd($imageName);

         Slider::create([
            'title' => $request->title,
            'image' => $imageName, // Save the image name in the database
            'description' => $request->description,
        ]);

        return response()->json(['success' => 'Slider added successfully!']);
    }   

    public function edit($encryptedId){
        
        try {
            $id = Crypt::decrypt($encryptedId);
            $slider = Slider::findOrFail($id);
            // dd($slider);
            // Pass the user data to the edit view
            return view('admin.slider.editSliderForm', compact('slider'));
        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
            abort(404); // Handle the error if decryption fails
        }
    }

    public function update(Request $request)
{
    
    // dd($request->all());
    $request->validate([
        'title' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'description' => 'required|string|max:1000',
    ]);
    $slider = Slider::findOrFail($request->id);
    // dd($slider);
    // Handle file upload if a new image is provided
    if ($request->hasFile('image')) {
        // Delete the old image if it exists
        if ($slider->image && file_exists(storage_path('app/public/sliders/img/' . $slider->image))) {
            unlink(storage_path('app/public/sliders/img/' . $slider->image));
        }

        // Upload new image
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->storeAs('sliders/img', $imageName, 'public');

        $slider->image = $imageName;
    }

    // Update other fields
    $slider->title = $request->title;
    $slider->description = $request->description;
    $slider->save();

    return response()->json([
        'success' => 'Slider updated successfully!'
    ]);
}
}
