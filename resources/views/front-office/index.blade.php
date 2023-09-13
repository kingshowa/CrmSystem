@extends("layouts.frontOfficeMaster")

@Section("frontContent")





<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{url('front')}}" class="logo">KMHI<em> carSale</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{url('front')}}" class="active">Home</a></li>
                            <li><a href="{{url('showcar')}}">Cars</a></li>
                            <li><a href="{{url('showteam')}}">Team</a></li>
                            
                            <li><a href="{{url('front-office/contact')}}">Contact</a></li>

                            @if(isset($_SESSION['contact']))
                            <li id="login"><a href="{{url('front-office/account/'.$_SESSION['contact'])}}">account</a></li> 
                            @else
                            <li id="login"><a href="{{url('front-office/login/#log')}}">login</a></li>
                            @endif
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
                    <a href="{{url('front-office/contact')}}">Contact Us</a>
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
                        <h2>New <em>Arrivals</em></h2>
                        <img src="{{asset('assets-front/images/line-dec.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="row">

            
            



   
        @foreach($produit as $produit)
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                        <a href="{{route('carview',$produit->id)}}">
                                <img src="{{asset('storage/images/'.$produit->photo)}}" alt="">
                            </a>
                        </div>
                        <div class="down-content">
                            <span>
                                 {{$produit->prix}} DZD
                            </span>

                            <h4>{{$produit->nom}}</h4>

                            <p>
                                <i class="fa fa-dashboard"></i> 130 000km &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cube"></i> 1800 cc &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cog"></i>{{$produit->type}} &nbsp;&nbsp;&nbsp;
                            </p>

                            <ul class="social-icons">
                                <li><a href="{{route('carview',$produit->id)}}">+ View Car</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
               
            <br>

            <div class="main-button text-center">
                <a href="{{url('showcar')}}">View Cars</a>
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



    @endsection