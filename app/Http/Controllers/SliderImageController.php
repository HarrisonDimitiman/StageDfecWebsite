<?php

namespace App\Http\Controllers;

use App\Models\SliderImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as Image;

class SliderImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliderImage = SliderImage::get();
        return view('adminBase.customization.slider.index', compact('sliderImage'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'text_image' => 'required',
            'image' => 'required',
        ]);
        $slider = new SliderImage;
        $slider->text = $request->text_image;

        if( $request->file('image') != null){
            $picture = $request->file('image');
            $fileName = time() . '.' . $picture->getClientOriginalExtension();
            $img = Image::make($picture->getRealPath());
            $img->stream();
            $url = Storage::disk('public')->put('uploads/slider', $picture);
            $slider->image = $url;  
        }
        $slider->save();
        

        return redirect()->back()->with('success','Slider Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(SliderImage $sliderImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sliderImage = SliderImage::where('id', $id)->first();
        return view('adminBase.customization.slider._edit', compact('sliderImage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $sliderImage = SliderImage::where('id', $id)->first();
        $sliderImage->text = $request->text_image;

        if( $request->file('image_edit') != null){
            $picture = $request->file('image_edit');
            $fileName = time() . '.' . $picture->getClientOriginalExtension();
            $img = Image::make($picture->getRealPath());
            $img->stream();
            $url = Storage::disk('public')->put('uploads/slider', $picture);
            $sliderImage->image = $url;  
        }
        $sliderImage->update();
        return redirect()->back()->with('success','Slider Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sliderImage = SliderImage::where('id', $id)->first();
        $sliderImage->delete();
        return redirect()->back()->with('success','Slider Deleted Successfully');
    }
}
