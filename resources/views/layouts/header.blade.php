<div class="topbar">
    <nav class="navbar-custom">
        <ul class="list-inline float-right mb-0">
            {{-- <li class="list-inline-item dropdown notification-list"> --}}
                {{-- <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <i class="ti-email noti-icon"></i>
                    <span class="badge badge-danger noti-icon-badge">5</span>
                </a> --}}
                {{-- <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5><span class="badge badge-danger float-right">5</span>Messages</h5>
                    </div>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon"><img src="assets/images/users/avatar-2.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
                        <p class="notify-details"><b>Charles M. Jones</b><small class="">Dummy text of the printing and typesetting industry.</small></p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon"><img src="assets/images/users/avatar-3.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
                        <p class="notify-details"><b>Thomas J. Mimms</b><small class="">You have 87 unread messages</small></p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon"><img src="assets/images/users/avatar-4.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
                        <p class="notify-details"><b>Luis M. Konrad</b><small class="">It is a long established fact that a reader will</small></p>
                    </a>
                    <div class="dropdown-divider"></div>
                    <!-- All-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        View All
                    </a>
                </div> --}}
            {{-- </li> --}}

            {{-- <li class="list-inline-item dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <i class="ti-bell noti-icon"></i>
                    <span class="badge badge-success noti-icon-badge">9</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5><span class="badge badge-success float-right">9</span>Notification</h5>
                    </div>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                        <p class="notify-details"><b>Your order is placed</b><small class="">Dummy text of the printing and typesetting industry.</small></p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-success"><i class="mdi mdi-message"></i></div>
                        <p class="notify-details"><b>New Message received</b><small class="">You have 87 unread messages</small></p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-warning"><i class="mdi mdi-martini"></i></div>
                        <p class="notify-details"><b>Your item is shipped</b><small class="">It is a long established fact that a reader will</small></p>
                    </a>
                    <div class="dropdown-divider"></div>
                    <!-- All-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        View All
                    </a>
                </div>
            </li> --}}

            <li >
                <a style="color:white; font-weight:1000; width: 70px; height: 50px; line-height: 50px;" href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out"></i> {{__('logout')}}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                    class="d-none">
                    @csrf
                </form>
            </li>
        </ul>

        {{-- <ul class="list-inline menu-left mb-0">
            <li class="float-left">
                <button class="button-menu-mobile open-left waves-light waves-effect">
                    <i class="mdi mdi-menu"></i>
                </button>
            </li>
            <li class="hide-phone app-search">
                <form role="search" class="">
                    <input type="text" placeholder="Search..." class="form-control">
                    <a href=""><i class="fa fa-search"></i></a>
                </form>
            </li>
        </ul> --}}
        <div class="clearfix"></div>
    </nav>
</div>