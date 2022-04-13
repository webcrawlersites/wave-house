@extends( 'layouts.admin' )

@section( 'content' )
<h1 class="admin-header">Add New Listing</h1>
@if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif
<form method="POST" action="{{ route('admin.store_properties') }}" id="add_property_form" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="prop_title">Property Title</label>
        <input type="text" name="prop_title" id="prop_title" required />
    </div>

    <div>
        <label for="prop_desciption">Property Description</label>
        <textarea name="prop_desc" id="prop_desc" required></textarea>
    </div>

    <div>
        <label for="prop_img">Property Image</label>
        <input type="file" name="prop_img" id="prop_img" required />
    </div>

    <div>
        <label for="prop_beds">Number of Bedrooms</label>
        <input type="number" name="prop_beds" id="prop_beds" steps="1" min="1" required />
    </div>

    <div>
        <label for="prop_baths">Number of Bathrooms</label>
        <input type="number" name="prop_baths" id="prop_baths" required />
    </div>

    <div>
        <label for="prop_ft">Sqaure Feet</label>
        <input type="number" name="prop_ft" id="prop_ft" required />
    </div>

    <div>
        <label for="props_basement">Finished Basement?</label>
        <select name="prop_basement" id="prop_basement" required>
            <option value="" selected disabled>Select an option</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>
    </div>

    <div>
        <label for="prop_tax">Property Tax</label>
        <input type="number" name="prop_tax" id="prop_tax" required />
    </div>

    <div>
        <label for="props_heat">Heat Type</label>
        <select name="prop_heat" id="prop_heat" required>
            <option value="" selected disabled>Select an option</option>
            <option value="gas">Gas</option>
            <option value="oil">Oil</option>
            <option value="electric">Electric</option>
        </select>
    </div>

    <div>
        <label for="props_waterheater">Finished Basement?</label>
        <select name="prop_waterheater" id="prop_waterheater" required>
            <option value="" selected disabled>Select an option</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>
    </div>

    <div>
        <label for="prop_year">Year Built</label>
        <input type="number" name="prop_year" id="prop_year" required />
    </div>

    <button type="submit">Add New Listing</button>

</form>

@endsection