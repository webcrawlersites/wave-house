@extends( 'layouts.admin' )

@section( 'content' )
<h1 class="admin-header">Current Property Listings</h1>

@if (count($properties) > 1)
    @foreach($properties as $p)
    <div class="property-card">
        <h3>{{$p->property_title}}</h3>
        <img src="{{$p->property_image}}" alt="Property Image">
    </div>
    @endforeach
@endif
@endsection