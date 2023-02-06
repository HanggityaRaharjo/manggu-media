<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div class="header-top black-bg d-none d-sm-block">
                <div class="container">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left">
                                <ul>
                                    <li class="title"><span class="flaticon-energy"></span> Manggu Media</li>
                                </ul>
                            </div>
                            <div class="header-info-right">
                                <ul class="header-date">
                                    <li><span class="flaticon-calendar"></span> +880166 253 232</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-mid gray-bg">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-3 col-lg-3 col-md-3 d-none d-md-block">
                            <div class="logo">
                                <a href="/"><img src="{{ asset('./manggumedia 1.png') }}" height="20px"
                                        alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="header-banner f-right ">

                                @if (!empty($iklan))
                                    <img src="{{ asset('./storage/adds-image/' . $iklan->iklan_1) }}" alt="" />
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-8 col-lg-8 col-md-12 header-flex">
                            <!-- sticky -->
                            <div class="sticky-logo">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('./manggumedia 1.png') }}" alt="manggu-media-logo">
                                </a>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-md-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{ url('/') }}">Beranda</a></li>
                                        <li><a href="{{ url('/') }}">Manggu Media</a></li>
                                        <li><a href="{{ url('/by-category') }}">Kategori</a></li>
                                        <li><a href="#">Berita terupdate</a></li>
                                        <li><a href="#">Podcast</a>
                                            <ul class="submenu">
                                                <li><a disabled>Cooming Soon</a></li>

                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="header-right f-right d-none d-lg-block">
                                <!-- Header social -->
                                @auth
                                    <ul class="header-social">
                                        <li style="font-weight:bold;color:white">{{ Auth::user()->name }}</li>
                                    </ul>
                                @else
                                    <ul class="header-social">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li> <a href="#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                @endauth
                                <!-- Search Nav -->
                                <!-- Header social -->
                                @auth
                                    <div
                                        style="display: inline-block;
                                    position: relative;">
                                        <form action="{{ url('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn"
                                                style="font-weight: bold;color:white">Logout</button>
                                        </form>
                                    </div>
                                @else
                                    <div class="nav-search search-switch">
                                        <i class="fa fa-search"></i>
                                    </div>
                                @endauth

                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-md-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
