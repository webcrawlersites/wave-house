@extends( 'layouts.admin' )

@section( 'content' )
<h1 class="admin-header">Add New Listing</h1>

<form method="POST" action="{{ route('admin.store_properties') }}" id="add_property_form" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="prop_title">Property Title</label>
        <input type="text" name="prop_title" />
    </div>

    <div>
        <label for="prop_desciption">Property Description</label>
        <textarea name="prop_desciption"></textarea>
    </div>

    <div>
        <label for="prop_img">Property Image</label>
        <input type="file" name="prop_img" required />
    </div>

    <div>
        <label for="prop_beds">Number of Bedrooms</label>
        <input type="number" name="prop_beds" steps="1" min="1" />
    </div>

    <div>
        <label for="prop_baths">Number of Bathrooms</label>
        <input type="number" name="prop_baths" />
    </div>

    <div>
        <label for="prop_ft">Sqaure Feet</label>
        <input type="number" name="prop_ft" />
    </div>

    <div>
        <label for="props_basement">Finished Basement?</label>
        <select name="props_basement" id="props_basement">
            <option value="yes" selected>Yes</option>
            <option value="no">No</option>
        </select>
    </div>

    <div>
        <label for="prop_tax">Property Tax</label>
        <input type="number" name="prop_tax" />
    </div>

    <div>
        <label for="props_heat">Heat Type</label>
        <select name="props_heat" id="props_heat">
            <option value="gas" selected>Gas</option>
            <option value="oil">Oil</option>
            <option value="electric">Eletric</option>
        </select>
    </div>

    <div>
        <label for="props_waterheater">Finished Basement?</label>
        <select name="props_waterheater" id="props_waterheater">
            <option value="yes" selected>Yes</option>
            <option value="no">No</option>
        </select>
    </div>

    <div>
        <label for="prop_year">Year Built</label>
        <input type="number" name="prop_year" />
    </div>

    <button type="submit">Add New Listing</button>

</form>

@endsection