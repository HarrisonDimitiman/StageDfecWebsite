<?php

namespace App\Http\Controllers;

use App\Models\CustomizationLCD;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as Image;

class CustomizationLCDController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lcd = CustomizationLCD::where('id', '1')->first();
        return view('adminBase.customization.lcd.index', compact('lcd'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CustomizationLCD $customizationLCD)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CustomizationLCD $customizationLCD)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $customizationLCD = CustomizationLCD::where('id', $id)->first();
        
        if( $request->file('logo') != null){
            $picture = $request->file('logo');
            $fileName = time() . '.' . $picture->getClientOriginalExtension();
            $img = Image::make($picture->getRealPath());
            $img->stream();
            $url = Storage::disk('public')->put('uploads/logo', $picture);
            $customizationLCD->logo = $url;  
        } else {
            if($customizationLCD->logo == 'DFEC')
            {
                $customizationLCD->logo = 'DFEC';
            }
            else 
            {
                $customizationLCD->logo = $customizationLCD->logo;
            }
        }
        $customizationLCD->location = $request->location;
        $customizationLCD->phone_number = $request->phone_number;
        $customizationLCD->email = $request->email;
        $customizationLCD->twitter_link = $request->twitter_link;
        $customizationLCD->fb_link = $request->fb_link;
        $customizationLCD->instagram_link = $request->instagram_link;
        $customizationLCD->update();

        return redirect()->back()->with('success','LCD Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomizationLCD $customizationLCD)
    {
        //
    }
}
