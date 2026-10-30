@extends('landing')

@section('title', 'Home')

@section('content')     

 <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
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
                        <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->


        <!-- Page Title -->
        <section class="page-title centred">
            <div class="bg-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-12.png);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>Testimonial Block</li>
                    </ul>
                    <div class="title">
                        <h1>Elements</h1>
                    </div>
                </div>
            </div>
            <div class="media-partner">
                <ul class="media-links clearfix">
                    <li><h6>Follow on social media</h6></li>
                    <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="index.html"><i class="fab fa-pinterest-p"></i></a></li>
                    <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- testimonial-style-two -->
        <section class="testimonial-style-two">
            <div class="bg-layer" style="background-image: url(assets/images/background/testimonial-bg.jpg);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 title-column">
                        <div class="sec-title">
                            <span class="sub-title">What’s Happening</span>
                            <h2>What They Say About Camp!</h2>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 inner-column">
                        <div class="inner-content">
                            <div class="two-item-carousel owl-carousel owl-theme owl-nav-none">
                                <div class="testimonial-content">
                                    <div class="text">
                                        <p>Lorem ipsum is simply free text dolor sit amet, nott adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                    <div class="author-box">
                                        <figure class="author-thumb"><img src="assets/images/resource/testimonial-2.jpg" alt=""></figure>
                                        <span class="name">Kevin Martin</span>
                                        <span class="designation">Kevin Martin</span>
                                    </div>
                                </div>
                                <div class="testimonial-content">
                                    <div class="text">
                                        <p>Lorem ipsum is simply free text dolor sit amet, nott adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                    <div class="author-box">
                                        <figure class="author-thumb"><img src="assets/images/resource/testimonial-3.jpg" alt=""></figure>
                                        <span class="name">Jessica Brown</span>
                                        <span class="designation">Kevin Martin</span>
                                    </div>
                                </div>
                                <div class="testimonial-content">
                                    <div class="text">
                                        <p>Lorem ipsum is simply free text dolor sit amet, nott adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                    <div class="author-box">
                                        <figure class="author-thumb"><img src="assets/images/resource/testimonial-2.jpg" alt=""></figure>
                                        <span class="name">Kevin Martin</span>
                                        <span class="designation">Kevin Martin</span>
                                    </div>
                                </div>
                                <div class="testimonial-content">
                                    <div class="text">
                                        <p>Lorem ipsum is simply free text dolor sit amet, nott adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                    <div class="author-box">
                                        <figure class="author-thumb"><img src="assets/images/resource/testimonial-3.jpg" alt=""></figure>
                                        <span class="name">Jessica Brown</span>
                                        <span class="designation">Kevin Martin</span>
                                    </div>
                                </div>
                                <div class="testimonial-content">
                                    <div class="text">
                                        <p>Lorem ipsum is simply free text dolor sit amet, nott adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                    <div class="author-box">
                                        <figure class="author-thumb"><img src="assets/images/resource/testimonial-2.jpg" alt=""></figure>
                                        <span class="name">Kevin Martin</span>
                                        <span class="designation">Kevin Martin</span>
                                    </div>
                                </div>
                                <div class="testimonial-content">
                                    <div class="text">
                                        <p>Lorem ipsum is simply free text dolor sit amet, nott adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                    <div class="author-box">
                                        <figure class="author-thumb"><img src="assets/images/resource/testimonial-3.jpg" alt=""></figure>
                                        <span class="name">Jessica Brown</span>
                                        <span class="designation">Kevin Martin</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-style-two end -->
@endsection