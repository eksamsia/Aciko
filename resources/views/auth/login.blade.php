<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
        
        <style>
            html {
                background: #FEFFDE;  
            }
            .p1 {
                position: absolute;
                width: 463px;
                height: 19px;
                left: 738px;
                top: 22px;

                font-family: Montserrat;
                font-style: normal;
                font-weight: 600;
                font-size: 20px;
                line-height: 24px;

                color: #52734D;
            }
            .signup {
                position: absolute;
                left: 1140px;
                top: 26px;
            }
        </style>
    </head>
    <body>
        <p class="p1">belum punya akun? yuk, daftar jadi anggota</p>
        <img src="Group2.png" class="signup">
                        <div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div>
                                    <label for="email" >{{ __('E-Mail Address') }}</label>

                                    <div>
                                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <label for="password">{{ __('Password') }}</label>

                                    <div>
                                        <input id="password" type="password" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <div>
                                        <div>
                                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label for="remember">
                                        {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div>
                                        <button type="submit">
                                    {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
    </body>
</html>
