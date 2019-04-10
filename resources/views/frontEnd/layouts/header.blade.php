<header id="header">
    <!--header-->
    <div class="header_top">
        <!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="tel:+250781449341"><i class="fa fa-phone"></i>+250 781 449 341</a></li>
                            <li><a href="mailto:info@caguwa.rw"><i class="fa fa-envelope"></i> info@caguwa.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="{{url('/viewcart')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>

                            @if(Auth::check())
                            <li><a href="{{url('/myaccount')}}"><i class="fa fa-user"></i> My Account</a></li>
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-lock"></i> Logout </a>
                            </li>
                            @else
                            <li><a href="{{url('/login_page')}}"><i class="fa fa-lock"></i> Login</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header_top-->
    <!--header-middle-->
    <div class="header-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="{{url('/')}}"><img src="{{asset('img/logo.png')}}" alt="" /></a>
                    </div>
                </div>
                <div class="col-sm-6 pull-right" id="searchbar">
                    <div class="search_box">
                        <input type="text" placeholder="Search" />
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--/header-middle-->

    <div class="header-bottom">
        <!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{url('/')}}" class="active">Home</a></li>
                            <!-- dynamic menu for categories -->
                            @include('frontEnd.layouts.main_menu')
                            <li>
                                <marquee behavior="slide" direction="right"><a href="#" id="member-join"> BECOME A
                                        SELLER</a></marquee>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header-bottom-->
</header>
<!--/header-->
