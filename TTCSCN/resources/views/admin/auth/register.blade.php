@extends('admin.layouts.admin')

@section('content')
    <body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <h1 class="title1">{{ __('Register admin') }}</h1>
                    <form method="POST" action="{{ route('admin.register.store') }}">
                        @csrf
                        <div class="sign-u">
                            <input id="name" class="form-control" placeholder="Name" type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>


                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif

                            <div class="clearfix"> </div>
                        </div>
                        <div>
                            <input id="email" class="form-control" placeholder="Email" type="email" class="user {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div>
                            <input id="password" class="form-control" placeholder="Password" type="password" class="lock {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>


                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div>
                            <div >
                                <input id="password-confirm"  placeholder="Confirm-Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div>
                            <input style="background: yellowgreen;width: 250px" class="btn btn-default submit" type="submit"  value="{{ __('Submit') }}">
                            {{--@if (Route::has('password.request'))--}}
                            {{--<a class="reset_pass" href="{{ route('password.request') }}">Quên mật khẩu</a>--}}
                            {{--@endif--}}
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">
                                <span>Already Registed.</span> <a href="{{route('admin.register.store')}}" class="to_register"> Login </a>
                            </p>

                            <div class="clearfix"></div>
                            <br>

                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
@endsection



