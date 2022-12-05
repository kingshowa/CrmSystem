@extends("layouts.frontOfficeMaster")

@Section("frontContent")


@php ($label = 'login')

@if(1==2)
@php ($label = 'account')
@endif

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{url('front-office')}}" class="logo">KMHI<em> carSale</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{url('front-office')}}" class="active">Home</a></li>
                            <li><a href="{{url('front-office/cars')}}">Cars</a></li>
                            <li><a href="{{url('front-office/team')}}">Team</a></li>
                            
                            <li><a href="{{url('front-office/contact')}}">Contact</a></li>

                            <li id="login"><a href="{{url('front-office/'.$label)}}">{{ $label }}</a></li> 
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

<!-- ***** Main Banner Area Start ***** -->
<div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="{{asset('assets-front/images/video.mp4')}}" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h2>Best <em>car dealer</em> in town!</h2>
                <div class="main-button">
                    <a href="contact.html">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

   <!-- ***** Cars Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Featured <em>Cars</em></h2>
                        <img src="{{asset('assets-front/images/line-dec.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="row">

            
            <!--@//foreach($produits as $produit)
                 <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{asset('assets-front/images/product-1-720x480.jpg')}}" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup>$</sup>11999 </del> &nbsp; <sup>$</sup>11779
                            </span>

                            <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                            <p>
                                <i class="fa fa-dashboard"></i> 130 000km &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cube"></i> 1800 cc &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cog"></i> Manual &nbsp;&nbsp;&nbsp;
                            </p>

                            <ul class="social-icons">
                                <li><a href="car-details.html">+ View Car</a></li>
                            </ul>
                        </div>
                    </div>
                </div> 
            @//endforeach-->





                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{asset('assets-front/images/product-1-720x480.jpg')}}" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup>$</sup>11999 </del> &nbsp; <sup>$</sup>11779
                            </span>

                            <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                            <p>
                                <i class="fa fa-dashboard"></i> 130 000km &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cube"></i> 1800 cc &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cog"></i> Manual &nbsp;&nbsp;&nbsp;
                            </p>

                            <ul class="social-icons">
                                <li><a href="car-details.html">+ View Car</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{asset('assets-front/images/product-2-720x480.jpg')}}" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup>$</sup>11999 </del> &nbsp; <sup>$</sup>11779
                            </span>

                            <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                            <p>
                                <i class="fa fa-dashboard"></i> 130 000km &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cube"></i> 1800 cc &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cog"></i> Manual &nbsp;&nbsp;&nbsp;
                            </p>

                            <ul class="social-icons">
                                <li><a href="car-details.html">+ View Car</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{asset('assets-front/images/product-3-720x480.jpg')}}" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup>$</sup>11999 </del> &nbsp; <sup>$</sup>11779
                            </span>

                            <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                            <p>
                                <i class="fa fa-dashboard"></i> 130 000km &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cube"></i> 1800 cc &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cog"></i> Manual &nbsp;&nbsp;&nbsp;
                            </p>

                            <ul class="social-icons">
                                <li><a href="car-details.html">+ View Car</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div class="main-button text-center">
                <a href="{{url('front-office/cars')}}">View Cars</a>
            </div>
        </div>
    </section>
    <!-- ***** Cars Ends ***** -->

    

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url({{asset('assets-front/images/banner-image-1-1920x500.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Send us a <em>message</em></h2>
                        <p>We are glad to know your interests, send us messases to start your negotiation process.</p>
                        <div class="main-button">
                            <a href="{{url('front-office/contact')}}">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Testimonials Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Read our <em>Testimonials</em></h2>
                        <img src="{{asset('assets-front/images/line-dec.png')}}" alt="waves">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem incidunt alias minima tenetur nemo necessitatibus?</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{asset('assets-front/images/features-first-icon.png')}}" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>John Doe</h4>
                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta numquam maxime voluptatibus, impedit sed! Necessitatibus repellendus sed deleniti id et!"</em></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{asset('assets-front/images/features-first-icon.png')}}" alt="second one">
                            </div>
                            <div class="right-content">
                                <h4>John Doe</h4>
                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta numquam maxime voluptatibus, impedit sed! Necessitatibus repellendus sed deleniti id et!"</em></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{asset('assets-front/images/features-first-icon.png')}}" alt="fourth muscle">
                            </div>
                            <div class="right-content">
                                <h4>John Doe</h4>
                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta numquam maxime voluptatibus, impedit sed! Necessitatibus repellendus sed deleniti id et!"</em></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{asset('assets-front/images/features-first-icon.png')}}" alt="training fifth">
                            </div>
                            <div class="right-content">
                                <h4>John Doe</h4>
                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta numquam maxime voluptatibus, impedit sed! Necessitatibus repellendus sed deleniti id et!"</em></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <br>

        </div>
    </section>
    <!-- ***** Testimonials Item End ***** -->

    @endsection