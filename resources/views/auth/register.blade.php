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
        <form method="POST" action="{{ route('register') }}" class="logreg-form register-form">
            @csrf
            <label for="name">{{ __('Name') }}</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">

            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" name="password" required autocomplete="new-password">

            <label for="password-confirm">{{ __('Confirm Password') }}</label>
            <input id="password-confirm" type="password"  name="password_confirmation" required autocomplete="new-password">

            <button type="submit">
                {{ __('Register') }}
            </button>
        </form>
    </div>
</section>
@endsection