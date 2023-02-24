<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left">
        <i class="ion-close"></i>
    </button>

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <!--<a href="index.html" class="logo"><i class="fa fa-paw"></i> Aplomb</a>-->
            <a href="index.html" class="logo"><img src="assets/images/logo.png" height="14" alt="logo"></a>
        </div>
    </div>
   

    <div class="sidebar-inner slimscrollleft" id="sidebar-main">

        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Overview</li>

                <li >
                    <a href="{{ url('home') }}" class="waves-effect waves-light"><i class="mdi mdi-view-dashboard"></i><span> Dashboard </span> 
                    <span class="badge badge-pill badge-primary float-right"></span></a>
                </li>
               
                

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect waves-light"><i class="mdi mdi-email"></i><span> Testimonial </span><span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('testimonial') }}"> Testimonial view</a></li>
                        
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect waves-light"><i class="mdi mdi-email"></i><span> client </span><span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('clientView') }}"> client view</a></li>
                        
                    </ul>
                </li>

              
            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>