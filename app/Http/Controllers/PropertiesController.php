<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Return the Admin Properties view with Property data
        $properties = Property::all();
        return view('admin.properties')->with('properties', $properties);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Return add_property view
        return view('admin.add_property');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Create a new Property and store it in the properties DB
        $prop = new Property;
        $path;

        if ($request->hasFile('prop_img')) {
           // Get file
            $file = $request->file('prop_img');

            // Get filename with extension
             $filenameWithExt = $request->file('prop_img')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just extension
            $extension = $request->file('prop_img')->getClientOriginalExtension();
 
            // Filename to store
            $filenameToStore = $filename . '_' . time() . '.' . $extension;
 
            // Upload Image
            $path = $request->file('prop_img')->storeAs('public/property_images', $filenameToStore);
            $moveImage = $file->move('public/property_images', $filenameToStore);
         }

        $prop->property_title = $request->input('prop_title');
        $prop->property_description = $request->input('prop_desc');
        $prop->property_image = $path;
        $prop->bedrooms = $request->input('prop_beds');
        $prop->bathrooms = $request->input('prop_baths');
        $prop->square_feet = $request->input('prop_ft');
        $prop->finished_basement = $request->input('prop_basement');
        $prop->prop_tax = $request->input('prop_tax');
        $prop->heat_type = $request->input('prop_heat');
        $prop->water_heater = $request->input('prop_waterheater');
        $prop->year_built = $request->input('prop_year');
        $prop->save();
        return view('admin.add_property');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return "I am Property number " . $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}