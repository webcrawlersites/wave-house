@extends('layouts.app')

@section('content')

<section id="home-hero">
    <div class="title-inner-container">
        <h1>Find Your Dream Home</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <button>View Homes</button>
    </div>
</section>
<section id="home-about" class="home-section">
    <div class="home-about-img">
        <img src="{{ asset('img/home-about.png') }}" alt="">
    </div>
    <div class="home-about-content ">
        <h2>Your Happiness is Our Success</h2>
        <hr>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse necessitatibus optio nemo. 
            Hic accusantium nihil obcaecati iure earum natus nobis, quia deleniti quod tempora at culpa recusandae
             cupiditate et commodi. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse necessitatibus optio nemo. 
            Hic accusantium nihil obcaecati iure earum natus nobis, quia deleniti quod tempora at culpa recusandae
             cupiditate et commodi.</p>
    </div>
</section>
<section class="home-featured home-section">
    <h2>Featured Homes</h2>
</section>
@endsection
