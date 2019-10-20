@extends('layouts.auth')

@section('login_content')
    <div class="page" data-animsition-in="fade-in" data-animsition-out="fade-out">
        <div class="page-content">
            <div class="page-brand-info">
                <div class="brand">
                    <img class="brand-img" src="{{asset('public/assets/images/logo@2x.png')}}" alt="...">
                    <h2 class="brand-text font-size-40">PSGA</h2>
                </div>
                <p class="font-size-20">UIN SUSKA KERJA PRAKTEK.</p>
                <p class="font-size-20">LOGIN PESERTA</p>
            </div>

            <div class="page-login-main animation-slide-right animation-duration-1">
                <div class="brand hidden-md-up">
                    <img class="brand-img" src="{{asset('public/assets/images/logo-colored@2x.png')}}" alt="...">
                    <h3 class="brand-text font-size-40">psga</h3>
                </div>
                <h3 class="font-size-24">Sign In Peserta</h3>
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>--}}

                <form method="POST" action="{{ route('peserta-login') }}">
                    @csrf
                    <div class="form-group">
                        <label class="sr-only" for="inputEmail">Email</label>
                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                               id="inputEmail" name="email" placeholder="Email">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="inputPassword">Password</label>
                        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                               id="inputPassword" name="password"
                               placeholder="Password">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                </form>
                <a href="{{url('peserta-register')}}" >Register</a>
            </div>
        </div>
    </div>
@endsection
