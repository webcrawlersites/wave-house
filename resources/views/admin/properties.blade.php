@extends( 'layouts.admin' )

@section( 'content' )
<h1 class="admin-header">Current Property Listings</h1>

@if (count($properties) > 0)
    <div class="admin-properties-list">
        @foreach($properties as $p)
        <div class="property-card">
            <h3>{{$p->property_title}}</h3>
            <div class="property-actions">
                <ul>
                    <li><a href="">View</a></li>
                    <li><a href="">Edit</a></li>
                    <li><a href="/admin/properties/delete/{{$p->id}}">Delete</a></li>
                </ul>
            </div>
        </div>
        @endforeach
    </div>

@else
    <p>No properties found.</p>
@endif
@endsection