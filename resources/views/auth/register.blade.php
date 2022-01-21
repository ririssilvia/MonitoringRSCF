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
<div class="container login-container">

    <body style="background-color: #338A94">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card text-center o-hidden border-0 shadow-lg my-5">
                    <div class="card-body">
                        <div class="text-center">
                            <br>
                            <h1 class="h4 text-gray-900 mb-4"><strong>REGISTER</strong></h1>
                        </div>
                        <hr>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="nid" class="col-md-4 col-form-label text-md-right">{{ __('NID') }}</label>

                                <div class="col-md-6">
                                    <input id="nid" type="text" class="form-control @error('nid') is-invalid @enderror" name="nid" value="{{ old('nid') }}" required autocomplete="nid" autofocus>

                                    @error('nid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                                <div class="col-md-6">
                                    <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus>

                                    @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="bidang" class="col-md-4 col-form-label text-md-right">Bidang</label>
                                <div class="col-md-6">
                                    <select class="form-control select2bs4" name="bidang" id="bidang" style="width: 100%;" required></br>
                                      <option value="Operasi">Operasi</option>
                                      <option value="Pemeliharaan">Pemeliharaan</option>
                                      <option value="ENJ dan QA">ENJ dan QA</option>
                                      <option value="Logistik">Logistik</option>
                                      <option value="Administrasi">Administrasi</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fungsi" class="col-md-4 col-form-label text-md-right">Fungsi</label>
                                <div class="col-md-6">
                                    <select class="form-control select2bs4" name="fungsi" id="fungsi" style="width: 100%;" required></br>
                                        <option value="MMK">MMK</option>
                                        <option value="CBM">CBM</option>
                                        <option value="MRK">MRK</option>
                                        <option value="Listrik">Listrik</option>
                                        <option value="Mesin">Mesin</option>
                                      </select>  
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="level" class="col-md-4 col-form-label text-md-right">Level</label>
                                <div class="col-md-6">
                                    <select class="form-control select2bs4" name="level" id="level" style="width: 100%;" required></br>
                                    <option value="Admin" disabled="disabled">Admin</option>
                                        <option value="PIC">PIC</option>
                                        <option value="User">User</option>
                                      </select>
                                </select>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-8 text-md-left">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
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