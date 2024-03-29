<!-- Start XP Col -->
<div class="col-10 col-md-10 col-lg-10">
    <div class="xp-profilebar text-right">
        <ul class="list-inline mb-0">


            @auth
                <li class="list-inline-item">
                    <div class="dropdown xp-message">
                        <a class="dropdown-toggle  text-white" href="#" role="button" id="xp-message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-speech font-18 v-a-m"></i>
                            <span class="badge badge-pill bg-success-gradient xp-badge-up">8</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="xp-message">
                            <ul class="list-unstyled">
                              <li class="media">
                                <div class="media-body">
                                  <h5 class="mt-0 mb-0 py-3 text-white text-center font-16">8 New Messages</h5>
                                </div>
                              </li>  
                              <li class="media xp-msg">
                                <img class="mr-3 align-self-center rounded-circle" src="dist/images/topbar/user-message-1.jpg" alt="Generic placeholder image">
                                <div class="media-body">
                                    <a href="#">  
                                        <h5 class="mt-0 mb-1 font-14">Ariel Blue<span class="font-12 f-w-4 float-right">3 min ago</span></h5>
                                        <p class="mb-0 font-13">Thank you for attending...<span class="badge badge-pill badge-success float-right">2</span></p>
                                    </a>
                                </div>
                              </li>
                              <li class="media xp-msg">
                                 <img class="mr-3 align-self-center rounded-circle" src="dist/images/topbar/user-message-2.jpg" alt="Generic placeholder image">
                                <div class="media-body">
                                    <a href="#">
                                        <h5 class="mt-0 mb-1 font-14">Jammy Moon<span class="font-12 f-w-4 float-right">5 min ago</span></h5>
                                        <p class="mb-0 font-13">Hey no worries! Trust me...<span class="badge badge-pill badge-success float-right">3</span></p>
                                    </a>
                                </div>
                              </li>
                              <li class="media xp-msg">
                                 <img class="mr-3 align-self-center rounded-circle" src="dist/images/topbar/user-message-3.jpg" alt="Generic placeholder image">
                                <div class="media-body">
                                    <a href="#">
                                        <h5 class="mt-0 mb-1 font-14">Lisa Ross<span class="font-12 f-w-4 float-right">5:25 PM</span></h5>
                                        <p class="mb-0 font-13">Remedies for colic? i don't...<span class="badge badge-pill badge-success float-right">5</span></p>
                                    </a>
                                </div>
                              </li>
                              <li class="media">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-0 py-3 text-black text-center font-14">
                                        <a href="#" class="text-primary">View all</a>
                                    </h5>
                              </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="list-inline-item">
                    <div class="dropdown xp-notification">
                        <a class="dropdown-toggle  text-white" href="#" role="button" id="xp-notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-bell font-18 v-a-m"></i>
                            <span class="badge badge-pill bg-danger-gradient xp-badge-up">3</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="xp-notification">
                            <ul class="list-unstyled">
                              <li class="media">
                                <div class="media-body">
                                  <h5 class="mt-0 mb-0 py-3 text-white text-center font-16">3 New Notifications</h5>
                                </div>
                              </li>  
                              <li class="media xp-noti">                                                
                                <div class="mr-3 xp-noti-icon primary-rgba"><i class="icon-user-follow text-primary"></i></div>
                                <div class="media-body">
                                    <a href="#">  
                                        <h5 class="mt-0 mb-1 font-14">New user registered</h5>
                                        <p class="mb-0 font-12 f-w-4">2 min ago</p>
                                    </a>
                                </div>
                              </li>
                              <li class="media xp-noti">
                                <div class="mr-3 xp-noti-icon success-rgba"><i class="icon-basket-loaded text-success"></i></div>
                                <div class="media-body">
                                    <a href="#">
                                        <h5 class="mt-0 mb-1 font-14">New order placed</h5>
                                        <p class="mb-0 font-12 f-w-4">8:45 PM</p>
                                    </a>
                                </div>
                              </li>
                              <li class="media xp-noti">
                                <div class="mr-3 xp-noti-icon danger-rgba"><i class="icon-like text-danger"></i></div>
                                <div class="media-body">
                                    <a href="#">
                                        <h5 class="mt-0 mb-1 font-14">John like your photo.</h5>
                                        <p class="mb-0 font-12 f-w-4">Yesterday</p>
                                    </a>
                                </div>
                              </li>
                              <li class="media">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-0 py-3 text-black text-center font-14">
                                        <a href="#" class="text-primary">View all</a>
                                    </h5>
                                </div>
                              </li>
                            </ul>                                            
                        </div>
                    </div>
                </li>
                <li class="list-inline-item mr-0">
                    <div class="dropdown xp-userprofile">
                        <a class="dropdown-toggle " href="#" role="button" id="xp-userprofile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="dist/images/topbar/user.jpg" alt="user-profile" class="rounded-circle img-fluid"><span class="xp-user-live"></span></a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="xp-userprofile">
                            <a class="dropdown-item py-3 text-white text-center font-16" href="#">{{ auth()->user()->name }}</a>
                            <a class="dropdown-item" href="#"><i class="icon-user text-primary mr-2"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i class="icon-wallet text-success mr-2"></i> Billing</a>
                            <a class="dropdown-item" href="#"><i class="icon-settings text-warning mr-2"></i> Setting</a>
                            <a class="dropdown-item" href="#"><i class="icon-lock text-info mr-2"></i> Lock Screen</a>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="icon-power text-danger mr-2"></i> Logout</button>
                            </form>
                        </div>
                    </div>                                   
                </li>
            @endauth
            @guest
                <a type="button" href="{{ route('login') }}" class="btn btn-round btn-secondary"><i class="mdi mdi-login"></i></a>  
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