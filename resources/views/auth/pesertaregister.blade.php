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
                <p class="font-size-20">REGISTER PESERTA</p>
            </div>

            <div class="page-login-main animation-slide-right animation-duration-1">
                <div class="brand hidden-md-up">
                    <img class="brand-img" src="{{asset('public/assets/images/logo-colored@2x.png')}}" alt="...">
                    <h3 class="brand-text font-size-40">psga</h3>
                </div>
                <h3 class="font-size-24">Register Peserta</h3>
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>--}}

                <form method="POST" action="{{ route('peserta-register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="sr-only">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                   name="name" required autofocus placeholder="Nama">
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                    </div>
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

                    <div class="form-group">
                        <label for="password-confirm" class="sr-only">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
                    </div>

                    <div class="form-group"  style="text-align:center;">
                        <script type="text/javascript">DrawBotBoot()</script>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block"  onclick="(ValidBotBoot());">Sign up</button>
                </form>
            </div>
        </div>
    </div>
@endsection
<script type="text/javascript">
    var a = Math.ceil(Math.random() * 10);
    var b = Math.ceil(Math.random() * 10);
    var c = a + b
    function DrawBotBoot()
    {
        document.write("<label style='font-size:18px'>Berapa jumlah "+ a + " + " + b +" ? </label>");
        document.write("<input id='BotBootInput' type='text' maxlength='2' size='2' class='form-control' placeholder='Masukkan jawaban anda!' autocomplete='off'/>");
    }
    function ValidBotBoot(){
        var d = document.getElementById('BotBootInput').value;
        if (d == c) return document.getElementById('login-form').submit();;
        return alert('Captcha Salah!');

    }
</script>
