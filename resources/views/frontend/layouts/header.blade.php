<header class="header shop">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <!-- Top Left -->
                    <div class="top-left">
                        <ul class="list-main">
                            @php
                                $settings=DB::table('settings')->get();
                                
                            @endphp
                            <li><a href="#">COOLPAD BANGLADESH</a></li>
                            <li><a href="#">COOLPAD COMMUNITY</a></li>
                        </ul>
                    </div>
                    <!--/ End Top Left -->
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <!-- Top Right -->
                    <div class="right-content">
                        <ul class="list-main">
                            @auth 
                                @if(Auth::user()->role=='admin')
                                    <li><i class="ti-user"></i> <a href="{{route('admin')}}"  target="_blank">Dashboard</a></li>
                                @else 
                                    <li><i class="ti-user"></i> <a href="{{route('user')}}"  target="_blank">Dashboard</a></li>
                                @endif
                                <li><i class="ti-power-off"></i> <a href="{{route('user.logout')}}">Logout</a></li>

                            @else
                                <li><i class="ti-power-off"></i><a href="{{route('login.form')}}">Login /</a> <a href="{{route('register.form')}}">Register</a></li>
                            @endauth
                        </ul>
                    </div>
                    <!-- End Top Right -->
                </div>
            </div>
        </div>
    </div>


    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="cat-nav-head">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="menu-area">
                            <div>
                                <!-- Logo -->
                                <div class="logo" id="logo">
                                    @php
                                        $settings=DB::table('settings')->get();
                                    @endphp                    
                                    <a href="{{route('home')}}"><img src="@foreach($settings as $data) {{$data->logo}} @endforeach" alt="logo"></a>
                                </div>
                                <!--/ End Logo -->
                            </div>

                            <!-- Main Menu -->
                            <nav class="navbar navbar-expand-lg pl-5">
                                <div class="navbar-collapse">	
                                    <div class="nav-inner">
                                        <ul class="nav main-menu menu navbar-nav">
                                            <li class="{{Request::path()=='home' ? 'active' : ''}}"><a href="{{route('home')}}">HOME</a></li>
                                            {{-- <li class="{{Request::path()=='about-us' ? 'active' : ''}}"><a href="{{route('about-us')}}">SMART PHONES</a></li>
                                            <li class="@if(Request::path()=='product-grids'||Request::path()=='product-lists')  active  @endif"><a href="{{route('product-grids')}}">ACCESORIES</a></li>												 --}}
                                                {{-- {{Helper::getHeaderCategory()}} --}}
                                            <!--drop down menu -->
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">SMART PHONES <b class="caret"></b></a>                      

                                                <ul class="dropdown-menu mega-menu" style="">
                            
                                                    <li class="mega-menu-column">
                                                        <ul>
                                                            <li class="nav-header">Mega menu 1</li>
                                                            <img src="{{ asset('frontend/img/restaurant.jpg') }}">
                                                        </ul>
                                                    </li>    
                                
                                                    <li class="mega-menu-column">
                                                        <ul>
                                                        <li class="nav-header">Mega menu 2</li>
                                                            <img src="{{ asset('frontend/img/restaurant.jpg') }}">
                                                        </ul>
                                                    </li> 

                                                    <li class="mega-menu-column">
                                                        <ul>                            
                                                        <li class="nav-header">Mega menu 3</li>
                                                            <img src="{{ asset('frontend/img/restaurant.jpg') }}">
                                                        </ul>
                                                    </li> 
                                                    
                                                </ul><!-- dropdown-menu -->
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">ACCESORIES<b class="caret"></b></a>                      

                                                <ul class="dropdown-menu mega-menu">
                            
                                                    <li class="mega-menu-column">
                                                        <ul>
                                                            <li class="nav-header">Mega menu 1</li>
                                                            <img src="{{ asset('frontend/img/restaurant.jpg') }}">
                                                        </ul>
                                                    </li>    
                                
                                                    <li class="mega-menu-column">
                                                        <ul>
                                                        <li class="nav-header">Mega menu 2</li>
                                                            <img src="{{ asset('frontend/img/restaurant.jpg') }}">
                                                        </ul>
                                                    </li> 

                                                    <li class="mega-menu-column">
                                                        <ul>                            
                                                        <li class="nav-header">Mega menu 3</li>
                                                            <img src="{{ asset('frontend/img/restaurant.jpg') }}">
                                                        </ul>
                                                    </li> 
                                                    
                                                </ul><!-- dropdown-menu -->
                                            </li>
                                            <li class="{{Request::path()=='blog' ? 'active' : ''}}"><a href="{{route('blog')}}">SUPPORT</a></li>									
                                               
                                            <li class="{{Request::path()=='contact' ? 'active' : ''}}"><a href="{{route('contact')}}">ABOUT</a></li>
                                            <!-- -->
                                            <li class="{{Request::path()=='contact' ? 'active' : ''}}"><a href="{{route('contact')}}">SHOP NOW</a></li>
                                            <li class="{{Request::path()=='contact' ? 'active' : ''}}"><a href="{{route('contact')}}">SERVICE PARTNER</a></li>
                                     
                                            <li class="{{Request::path()=='contact' ? 'active' : ''}} search-icon"><a href="{{route('contact')}}"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!--/ End Main Menu -->	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>