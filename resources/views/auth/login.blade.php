@extends('layouts.admin')

@section('content')
<section class="logreg-form-container">
    <div class="logreg-form-inner-container">
        <div class="logreg-logo">
            <img src="{{ asset('img/waveHouse-logo.svg') }}" alt="">
        </div>
        @if($errors->any())
        <div>
            <h4>{{$errors->first()}}</h4>
        </div>
        @endif
        <form method="POST" action="{{ route('login') }}" class="logreg-form">
            @csrf
            <label for="email">{{ __('Email Address') }}</label>
            <input id="email" type="email" name="email">

            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" name="password" required autocomplete="current-password">

            <button type="submit" class="btn btn-primary">
                {{ __('Login') }}
            </button>
        </form>
    </div>
</section>
@endsection