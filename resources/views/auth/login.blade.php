<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/18b9c19e43.js" crossorigin="anonymous"></script>
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
                top: 36px;
            }
            .hello-kopmania {
                position: absolute;
                width: 314px;
                height: 36px;
                left: 860px;
                top: 140px;

                font-family: Montserrat;
                font-style: normal;
                font-weight: 500;
                font-size: 36px;
                line-height: 44px;
                text-align: center;

                color: #000000;

            }
            .selamat-datang {
                position: absolute;
                width: 260px;
                height: 16px;
                left: 915px;
                top: 210px;

                font-family: Montserrat;
                font-style: normal;
                font-weight: 500;
                font-size: 20px;
                line-height: 24px;

                color: #000000;

            }
            .label-email {
                position: absolute;
                width: 126px;
                height: 31px;
                left: 798px;
                top: 296px;

                font-family: Montserrat;
                font-style: normal;
                font-weight: 500;
                font-size: 16px;
                line-height: 20px;

                color: #000000;

            }
            .input-email {
                position: absolute;
                width: 430px;
                height: 37px;
                left: 798px;
                top: 337px;

                background: #FFFFFF;
                border: 1px solid #000000;
                box-sizing: border-box;
                border-radius: 10px;

            }
            .label-password {
                position: absolute;
                width: 126px;
                height: 31px;
                left: 798px;
                top: 394px;

                font-family: Montserrat;
                font-style: normal;
                font-weight: 500;
                font-size: 16px;
                line-height: 20px;

                color: #000000;

            }
            .input-password {
                position: absolute;
                width: 430px;
                height: 37px;
                left: 798px;
                top: 435px;

                background: #FFFFFF;
                border: 1px solid #000000;
                box-sizing: border-box;
                border-radius: 10px;
            }
            .login {
                position: absolute;
                width: 429px;
                height: 39px;
                left: 800px;
                top: 502px;

                background: #52734D;
                border-radius: 20px;
                
                font-family: Montserrat;
                font-style: normal;
                font-weight: 600;
                font-size: 18px;
                line-height: 18px;

                color: #FDFFC5;

            }
            .lupa-password {
                position: absolute;
                width: 118px;
                height: 19px;
                left: 940px;
                top: 560px;

                font-family: Montserrat;
                font-style: normal;
                font-weight: 600;
                font-size: 14px;
                line-height: 17px;

                color: #000000;

            }
            .klik-di-sini {
                position: absolute;
                width: 77px;
                height: 19px;
                left: 1045px;
                top: 573px;

            }
            .aciko {
                position: absolute;
                width: 365.66px;
                height: 481.99px;
                left: 230.57px;
                top: 139px;

                background: url(.png);
                filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
                transform: rotate(0.07deg);
            }
            .footer {
                position: absolute;
                width: 1454px;
                height: 216px;
                left: 0px;
                top: 820px;
                background: #DDFFBC;
            }
            .footer address {
                position: absolute;
                left: 7%;
                top: 20%;
                background: #DDFFBC;
            }
            .footer maps {
                position: absolute;
                left: 21%;
                top: 20%;
            }
            .footer instagram {
                position: absolute;
                right: 45%;
                top: 43%
            }
            .footer facebook {
                position: absolute;
                right: 42%;
                top: 43%;
            }
            .footer twitter {
                position: absolute;
                right: 39%;
                top: 43%;
            }
            .footer linkedin {
                position: absolute;
                right: 36%;
                top: 43%;
            }
        </style>
    </head>
    <body>
        <p class="p1">Belum punya akun? yuk, daftar jadi anggota</p>
        <a href="https://www.figma.com/file/bXCLG74yhDKA4xAtmOzbGQ/Design-Aciko?node-id=440%3A2"><img src="Group2.png" class="signup"></a>
        <p class="hello-kopmania">Hello, Kopmania</p>
        <p class="selamat-datang">Selamat Datang di Aciko</p>
        <img class="aciko" src="maskot mirror 2.png">
                        <div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div>
                                    <label class="label-email" for="email" >{{ __('Email / NAK') }}</label>

                                    <div>
                                        <input class="input-email" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Masukkan NAK" autofocus>

                                        @error('email')
                                            <span role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <label class="label-password" for="password">{{ __('Password') }}</label>

                                    <div>
                                        <input class="input-password" id="password" type="password" name="password" required autocomplete="current-password" placeholder="Masukkan Password">

                                        @error('password')
                                            <span role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <!--<div>
                                    <div>
                                        <div>
                                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label for="remember">
                                        {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>-->

                                <div>
                                    <div>
                                        <button class="login">{{ __('Login') }}</button>
                                        <p class="lupa-password">Lupa Password?</p>

                                        @if (Route::has('password.request'))
                                            <a class="klik-di-sini" href="{{ route('password.request') }}">
                                                {{ __('Klik di sini') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
        <div class="footer">
            <address><img src="alamat.png"></address>
            <maps><a href="https://www.google.com/maps/place/Cooperative+Students+%22Kopma+UGM%22/@-7.7802549,110.3734012,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7a584a64a8c80d:0x8a3e45ee1d989b96!8m2!3d-7.780261!4d110.3755952"><img src="maps.png"></a></maps>
            
            <a href=#><img src="Follow_us.png" style="position: absolute; background: #DDFFBC; top: 26%; right: 38.5%;"></a>

            <instagram><a href=#><i class="fab fa-instagram" style="font-size: 30px; color:#52734D;"></i></a></instagram>
            <facebook><a href=#><i class="fab fa-facebook" style="font-size: 30px; color:#52734D;"></i></a></facebook>
            <twitter><a href=#><i class="fab fa-twitter" style="font-size: 30px; color:#52734D;"></i></twitter>
            <linkedin><a href=#><i class="fab fa-linkedin" style="font-size: 30px; color:#52734D; position: absolute; right: 36%; top: 43%;"></i></linkedin>
            <a href=#><img src="nama_grup1.png" style="position: absolute; background: #DDFFBC; top: 65%; right: 37.5%; height: 20px; width: 120px;"></a>
        </div>
    </body>
    
</html>
