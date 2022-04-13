<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use Illuminate\Support\Facades\Storage;

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

        // Create a new Property instance and store it in the properties DB
        $prop = new Property;

        if ($request->hasFile('prop_img')) {
            // Get the file data fromt he form
            $file = $request->file('prop_img');

            // Get the filename of the uploaded file with Extension
            $filenameWithExtension = $file->getClientOriginalName();

            // Get the filename of the uploaded file extension
            $Extension = $file->getClientOriginalExtension();

            // Get the file name without extension. Then, we will add a time() to the end of the name
            $filenameOnly = pathinfo($filenameWithExtension, PATHINFO_FILENAME);

            // Now we will create a name for the file so there isn't a duplicate error in storage
            $filename = $filenameOnly . time() . '.' . $Extension;

            // Store the uploaded file (NOT the filename) into a folder in the public directory
            // It already knows to create it in public. So just put the name of the folder you will like to create
            $file->move('property_images', $filename); // move takes two parameters - The path to move the file and the name of the file

            // Store the file name into the database
            $prop->property_image = $filename;
         }

        // Syntax:
        // $prop is a new Property instance
        // property_title is the table name in the Properties table
        // $request object pulls the forma data
        //input() take a parameter of the name attribute of the HTML input or select field from the form submittes
        $prop->property_title = $request->input('prop_title');
        $prop->property_description = $request->input('prop_desc');
        $prop->bedrooms = $request->input('prop_beds');
        $prop->bathrooms = $request->input('prop_baths');
        $prop->square_feet = $request->input('prop_ft');
        $prop->finished_basement = $request->input('prop_basement');
        $prop->prop_tax = $request->input('prop_tax');
        $prop->heat_type = $request->input('prop_heat');
        $prop->water_heater = $request->input('prop_waterheater');
        $prop->year_built = $request->input('prop_year');

        // After uploading all the data, save it to the table in the database
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
        // Find the specific property id
        $property = Property::find($id);

        // Delete record from table
        $property->delete();

        // Delete the file stored for this property
        $imageFile = $property->property_image;
        Storage::delete($imageFile);

        return redirect('admin/properties');
    }
}