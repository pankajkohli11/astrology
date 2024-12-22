<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class HomeController extends Controller
{
    public function home(){
        $slider = Slider::latest()->get();
        return view('frontend.home',[
            'slider' => $slider
        ]);
    }
}
