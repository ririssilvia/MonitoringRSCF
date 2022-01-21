<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('../../vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('admin/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body style="background-color: #338A94">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block ">
                                <br>
                                <img src="{{asset('img/login.png')}}" style="width:430px;height:430px;">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><strong>LOGIN</strong></h1>
                                        <h1 class="h4 text-gray-900 mb-4">Monitoring FDT RCFA</h1>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('login') }}" class="user">
                                            @csrf
                                            
                                                <div class="form-group">
                                                    <label for="nid"><strong>NID</strong></label>
                                                    <input id="nid" type="text" class="form-control form-control-user @error('username') is-invalid @enderror" name="nid" value="{{ old('nid') }}" placeholder="Enter NID" required autocomplete="nid" autofocus>
                                                    @error('username')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                    
                                            <div class="form-group">
                                                <label for="nid"><strong>Password</strong></label>
                                                    <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" placeholder="Enter Password..." required autocomplete="current-password">
                    
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox small">
                                                        <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    
                                                        <label class="custom-control-label" for="remember">
                                                            {{ __('Remember Me') }}
                                                        </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                                        {{ __('Login') }}
                                                    </button>
                                            </div>
                                                    
                                            
                                        </form>
                                    </div>
                                    <hr>
                                    </form>
                                    {{-- <div class="text-center">
                                        @if (Route::has('password.request'))
                                                        <a class="small" href="{{ route('password.request') }}">
                                                            {{ __('Forgot Your Password?') }}
                                                        </a>
                                                    @endif
                                    </div> --}}
                                    <div class="text-center">
                                        <a class="small" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('admin/js/sb-admin-2.min.js')}}"></script>

</body>

</html>