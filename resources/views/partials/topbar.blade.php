
        <header class="topbar d-print-none" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark" style="background-color: teal;">
                <div class="navbar-header" data-logobg="skin5" style="background-color: teal;">
                    <!-- Logo -->
                    <a class="navbar-brand" href="{{ url('/dashboard') }}">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{ url('') }}/assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <!-- /assets/images/download.png -->
                            <img src="{{ url('') }}/assets/images/bank.webp" width="100px" height="100px" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                             <!-- dark Logo text -->
                             Online Banking
                             <!-- Light Logo text -->

                        </span>
                    </a>
                    <!-- End Logo -->
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5" style="background-color: teal;">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav float-left mr-auto">
                    </ul>
                    <ul>
                        <li class="navbar-nav float-right">
                            <a style="color: aliceblue" class="pt-4 text-decoration-none " href="{{route('index')}}"> Duyurular </a>
                        </li>
                    </ul>
                    <ul class="pt-4 navbar-nav float-right">
                        {{-- <li class="nav-item"> <a class="nav-link"><i class="fa fa-bell"></i></a> </li> --}}
                        <li class="nav-item"> <a href="#" class="nav-link"><i class="fa fa-envelope"></i></a> </li>
                    </ul>
                    <!-- Right side toggle and nav items -->
                    <ul class="pt-4 navbar-nav float-right">
                        <!-- User profile and search -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="rounded-circle" src="{{ url('') }}/assets/images/users/oms.jpeg" alt="user" width="60" height="60"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="{{route('profile')}}"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                <a class="dropdown-item" href="#"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                                <a class="dropdown-item" href="{{route('logout')}}"><i class="ti-power-off m-r-5 m-l-5"></i> Logout</a>
                            </div>
                        </li>
                        <!-- User profile and search -->
                    </ul>
                </div>
            </nav>
        </header>
