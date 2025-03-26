<?php
namespace App\Http\Controllers;

use App\Models\Slider;

class HomepageController extends Controller
{
    public function homepage()
    {
        $sliders = Slider::oldest()->get();
        // return $sliders;
        return view('frontend.homepage',compact('sliders'));
    }
}
