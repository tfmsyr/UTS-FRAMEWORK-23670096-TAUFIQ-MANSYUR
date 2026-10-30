<!-- preloader -->
<div class="preloader">
    <div class="boxes">
        <div class="box"><div></div><div></div><div></div><div></div></div>
        <div class="box"><div></div><div></div><div></div><div></div></div>
        <div class="box"><div></div><div></div><div></div><div></div></div>
        <div class="box"><div></div><div></div><div></div><div></div></div>
    </div>
</div>
<!-- preloader end -->

<!-- main header -->
<header class="main-header header-style-one">
    <div class="header-lower">
        <div class="logo-box">
            <figure class="logo"><a href="{{ route('landing.home') }}"><img src="{{ asset('assets/landing/images/logo.png') }}" alt=""></a></figure>
        </div>
        <div class="outer-box">
            <div class="menu-area">
                <!--Mobile Navigation Toggler-->
                <div class="mobile-nav-toggler">
                    <i class="icon-bar"></i>
                    <i class="icon-bar"></i>
                    <i class="icon-bar"></i>
                </div>
                <nav class="main-menu navbar-expand-md navbar-light">
                    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                            <li class="current"><a href="{{ route('landing.home') }}">Home</a></li>
                            <li><a href="{{ route('landing.activities') }}">Activities</a></li>
                            <li><a href="{{ route('landing.about') }}">About</a></li>
                            <li><a href="{{ route('landing.testimonial') }}">element</a></li>
                            <li><a href="{{ route('landing.blog') }}">Blog</a></li>
                            <li><a href="{{ route('landing.contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>


    <!--sticky Header-->
<div class="menu-right-content">
                <div class="support-box">
                    <div class="icon"><i class="flaticon-chat"></i></div>
                    <span>Call Anytime</span>
                    <h5><a href="tel:12463330079">+1- ( 246 ) 333 - 0079</a></h5>
                </div>
                <div class="search-box-outer">
                    <div class="dropdown">
                        <button class="search-box-btn" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-magnifying-glass"></i></button>
                        <div class="dropdown-menu search-panel" aria-labelledby="dropdownMenu3">
                            <div class="form-container">
                                <form method="get" action="{{ route('landing.blog') }}">
                                    <div class="form-group">
                                        <input type="search" name="search-field" value="" placeholder="Search...." required="">
                                        <button type="submit" class="search-btn"><span class="fas fa-search"></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart-box"><a href="#"><i class="flaticon-shopping-cart"></i></a></div>
            </div>
        </div>
    </div>
<!-- main-header end -->

<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>

    <nav class="menu-box">
        <div class="nav-logo"><a href="{{ route('landing.home') }}"><img src="{{ asset('assets/landing/images/logo-2.png') }}" alt="" title=""></a></div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>Chicago 12, Melborne City, USA</li>
                <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                <li><a href="mailto:info@example.com">info@example.com</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                <li><a href="#"><span class="fab fa-youtube"></span></a></li>
            </ul>
        </div>
    </nav>
</div>
<!-- End Mobile Menu -->