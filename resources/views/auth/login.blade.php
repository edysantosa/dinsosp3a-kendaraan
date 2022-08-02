<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Neon is a bootstrap, laravel & php admin dashboard template">
    <meta name="keywords" content="admin, admin dashboard, admin panel, admin template, admin theme, bootstrap 4, laravel, php, crm, analytics, responsive, sass support, ui kits, web app, clean design">
    <meta name="author" content="Themesbox17">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <title>Neon - Bootstrap + Laravel + PHP Admin Dashboard Template</title>

    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{ asset('dist/images/favicon.ico') }}">

    <!-- Main App CSS -->
    <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}">

</head>

<body class="xp-horizontal">

    <div class="xp-authenticate-bg"></div>
    <!-- Start XP Container -->
    <div id="xp-container" class="xp-container">

        <!-- Start Container -->
        <div class="container">

            <!-- Start XP Row -->
            <div class="row vh-100 align-items-center">
                <!-- Start XP Col -->
                <div class="col-lg-12 ">

                    <!-- Start XP Auth Box -->
                    <div class="xp-auth-box">

                        <div class="card">
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-warning" role="alert">
                                      {{ session('status' )}}
                                    </div>
                                @endif
                                @if ($errors->any())
                                <div class="alert alert-warning">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>                                
                                @endif

                                <h3 class="text-center mt-0 m-b-15">
                                    <a href="index.html" class="xp-web-logo"><img src="{{ asset('dist/images/logo-default.svg') }}" height="40" alt="logo"></a>
                                </h3>
                                <div class="p-3">
                                    <form class="xp-form-validate" action="{{ route('login') }}" method="post">
                                        @csrf
                                        <div class="form-group">    
                                            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Username" value="{{ old('username') }}" required>

                                            @error('username')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror                                  
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"  name="password" placeholder="Password" required>

                                            @error('password')
                                            <div class="invalid-feedback">
                                                Password salah
                                            </div>
                                            @enderror   
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-6">
                                                <div class="custom-control custom-checkbox">
                                                  <input type="checkbox" class="custom-control-input" id="rememberme">
                                                  <label class="custom-control-label" for="rememberme">Remember Me</label>
                                                </div>                                
                                            </div>
                                            <div class="form-group col-6 text-right">
                                              <label class="forgot-psw"> 
                                                <a id="forgot-psw" href="page-forgotpsw.html">Lupa Kata Sandi?</a>
                                              </label>
                                            </div>
                                        </div>                          
                                      <button type="submit" class="btn btn-primary btn-rounded btn-lg btn-block">Login</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End XP Auth Box -->

                </div>
                <!-- End XP Col -->
            </div>
            <!-- End XP Row -->
        </div>
        <!-- End Container -->
    </div>
    <!-- End XP Container -->

    <!-- Main App JS -->        
    <script src="{{ asset('dist/js/login.js') }}"></script>

</body>
</html>