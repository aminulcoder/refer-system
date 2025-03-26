<?php

namespace App\Http\Controllers\Admin\Slider;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::latest()->paginate();
        return view('admin.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'thumbnail'   => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = [
            'title'       => $request->title,
            'description' => $request->description,
        ];

        if ($request->hasFile('thumbnail')) {
            // Public ডিস্কে সেভ করুন
            $file_name = $request->file('thumbnail')->store('slider/thumbnail', 'public');
            $data['thumbnail'] = $file_name;
        }

        Slider::create($data);

        return redirect()->route('slider.index')->with('success', 'Slider Successfully Created');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $slider = Slider::where('id', $id)->first();
        // return $package;
        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'title'      => $request->title,
            'description' => $request->description,
        ];
        if($request->file('thumbnail')){
            $file_name = $request->file('thumbnail')->store('slider/thumbnail', 'public');
            $data['thumbnail'] = $file_name;
        }
        Slider::firstwhere('id', $id)->update($data);
        Session::flash('warning');
        return redirect()->route('slider.index')->with('warning', ' slider Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Slider::findOrFail($id);
        Storage::delete($slider->thumbnail);
        $slider->delete();
        return redirect()->route('slider.index')->with('success','data successfully Deleted');
    }
}
