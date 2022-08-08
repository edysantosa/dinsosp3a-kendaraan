<!-- Start XP Col -->
<div class="col-10 col-md-10 col-lg-10">
    <div class="xp-profilebar text-right">
        <ul class="list-inline mb-0">
            @auth
                <li class="list-inline-item mr-0">
                    <div class="dropdown xp-userprofile">
                        <a class="dropdown-toggle " href="#" role="button" id="xp-userprofile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('dist/images/topbar/user.jpg')}}" alt="user-profile" class="rounded-circle img-fluid"><span class="xp-user-live"></span></a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="xp-userprofile">
                            <a class="dropdown-item py-3 text-white text-center font-16" href="#">{{ auth()->user()->name }}</a>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="icon-power text-danger mr-2"></i> Logout</button>
                            </form>
                        </div>
                    </div>                                   
                </li>
            @endauth
            @guest
                <div class="xp-countdown-block"><span class="text-warning font-40" id="clock"></span><a type="button" href="{{ route('login') }}" class="btn btn-round btn-secondary inline m-l-30"><i class="mdi mdi-login"></i></a></div>
            @endguest

            <li class="list-inline-item xp-horizontal-menu-toggle">
                <button type="button" class="navbar-toggle bg-transparent" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="icon-menu font-20 text-white"></i>
                </button>                                   
            </li>
        </ul>
    </div>
</div>
<!-- End XP Col -->