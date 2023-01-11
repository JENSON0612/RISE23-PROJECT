<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>

<link rel="stylesheet" href="{{asset('css/login.css')}}">

<div class="video-bg">
    <video width="320" height="240" autoplay loop muted>
        <source src="{{asset('video/background video.mp4')}}">
    </video>
</div>
<div class="dark-light">
    <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
     <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" /></svg>
   </div><br><br><br>
<div class="container">
    <div class="rowContainer ">
        <div class="logInContainer">
            <div class="card">
                <div class="card-header">Welcome To EZ</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="rowContainer2">
                            <label for="email" class="emailWord">{{ __('Email Address') }}</label>

                            <div class="emailInput">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="rowContainer3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="rowContainer4">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" brole="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="rowContainer5">
                            <div class="logInBtn">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                    
                                </button>
                                 <a href="http://localhost:8000/register" type="button" class="btn btn-primary2">
                                    {{ __('Register') }}
                                    
                                    </a><br><br>
                                    
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{asset('js/layout.js')}}"></script>