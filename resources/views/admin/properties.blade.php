@extends( 'layouts.admin' )

@section( 'content' )
<h1 class="admin-header">Current Property Listings</h1>

@if (!count($properties) > 1)
    @foreach($properties as $p)
    <div class="property-card">
        <h3>{{$p->property_title}}</h3>
    </div>
    @endforeach
@endif
@endsection