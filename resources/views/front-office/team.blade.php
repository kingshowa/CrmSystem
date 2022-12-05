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
                            <li><a href="{{url('front-office')}}">Home</a></li>
                            <li><a href="{{url('front-office/cars')}}">Cars</a></li>
                            <li><a href="{{url('front-office/team')}}" class="active">Team</a></li>
                            
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

    <section class="section section-bg" id="call-to-action" style="background-image: url({{ asset('assets-front/images/banner-image-1-1920x500.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Meet our <em>Team</em></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="trainers">
        <div class="container">
            <br>
            <br>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{ asset('assets-front/images/team-image-1-646x680.jpg')}}" alt="">
                        </div>
                        <div class="down-content">
                            <span>CEO</span>
                            <h4>John Doe</h4>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{ asset('assets-front/images/team-image-2-646x680.jpg')}}" alt="">
                        </div>
                        <div class="down-content">
                            <span>Customer Support</span>
                            <h4>Jane Smith</h4>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{ asset('assets-front/images/team-image-3-646x680.jpg')}}" alt="">
                        </div>
                        <div class="down-content">
                            <span>Customer Support</span>
                            <h4>Kate Johnson</h4>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{ asset('assets-front/images/team-image-4-646x680.jpg')}}" alt="">
                        </div>
                        <div class="down-content">
                            <span>Customer Support</span>
                            <h4>Mark Green</h4>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection