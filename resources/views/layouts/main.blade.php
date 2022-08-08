<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Neon is a bootstrap, laravel & php admin dashboard template">
    <meta name="keywords" content="admin, admin dashboard, admin panel, admin template, admin theme, bootstrap 4, laravel, php, crm, analytics, responsive, sass support, ui kits, web app, clean design">
    <meta name="author" content="Themesbox17">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <title>Si-Jakas - Sistem Penjadwalan Kendaraan Dinas</title>

    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{ asset('dist/images/pemprov.png') }}">
    
    <!-- Main App CSS -->
    <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body class="xp-horizontal">
    <input type="hidden" id="sitebase" data-url="{{url('/')}}">

    <!-- Start XP Container -->
    <div id="xp-container">

        <!-- Start XP Rightbar -->
        <div class="xp-rightbar">

            <!-- Start XP Headerbar -->
            <div class="xp-headerbar">

                <!-- Start XP Topbar -->
                <div class="xp-topbar">

                    <!-- Start XP Row -->
                    <div class="row"> 

                        <!-- Start XP Col -->
                        <div class="col-2 col-md-2 col-lg-2 align-self-center">
                            <!-- Start XP Logobar -->
                            <div class="xp-logobar">
                                <a href="index.html" class="xp-small-logo"><img src="{{ asset('dist/images/mobile-logo-sijakas.png') }}" class="img-fluid" alt="logo"></a>
                                <a href="index.html" class="xp-main-logo"><img src="{{ asset('dist/images/logo-sijakas.png') }}" class="img-fluid" alt="logo"></a>
                            </div>                        
                            <!-- End XP Logobar -->
                        </div> 
                        <!-- End XP Col -->

                        @include('layouts.topmenu')

                    </div> 
                    <!-- End XP Row -->

                </div>
                <!-- End XP Topbar -->

                @auth
                @include('layouts.menu')
                @endauth
                
            </div>
            <!-- End XP Headerbar -->

            {{-- @include('layouts.breadcrumb') --}}
            
            <!-- Start XP Contentbar -->    
            <div class="xp-contentbar">
                @yield('content')
            </div>
            <!-- End XP Contentbar -->

            <!-- Start XP Footerbar -->
            <div class="xp-footerbar">
                <footer class="footer">
                    <p class="mb-0">© 2022 - Dinas Sosial P3A Provinsi Bali.</p>
                </footer>
            </div>
            <!-- End XP Footerbar -->

        </div>
        <!-- End XP Rightbar -->        

    </div>
    <!-- End XP Container -->    

    <!-- Main App JS -->        
    <script src="{{ asset('dist/js/bootstrap.js') }}"></script>
    @yield('pagescript')
</body>
</html>