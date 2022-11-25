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
                            <li><a href="{{url('front-office/cars')}}" class="active">Cars</a></li>
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


<!-- ***** Call to Action Start ***** -->
<section class="section section-bg" id="call-to-action" style="background-image: url({{asset('assets-front/images/banner-image-1-1920x500.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Our <em>Cars</em></h2>
                        <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <br>
            

            <div class="row">
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

                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{asset('assets-front/images/product-4-720x480.jpg')}}" alt="">
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
                            <img src="{{asset('assets-front/images/product-5-720x480.jpg')}}" alt="">
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
                            <img src="{{asset('assets-front/images/product-6-720x480.jpg')}}" alt="">
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
                
            <nav>
              <ul class="pagination pagination-lg justify-content-center">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>

        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->

@endsection