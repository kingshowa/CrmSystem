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
                            <li><a href="{{url('front')}}">Home</a></li>
                            <li><a href="{{url('front-office/cars')}}">Cars</a></li>

                            <li><a href="{{url('front-office/team')}}">Team</a></li>
                            
                            <li><a href="{{url('front-office/contact')}}">Contact</a></li>

                            <li id="login"><a href="{{url('front-office/'.$label)}}" class="active">{{ $label }}</a></li> 
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

    <section class="section section-bg" id="call-to-action" style="background-image: url({{asset('assets-front/images/banner-image-1-1920x500.jpg')}})">
    <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>login to <em>contact</em> account</h2>
                    </div>
                </div>
            </div>
        </div>

    </section>

   
    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us" style="margin-top: 40px">
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-lg-5 col-md-5 col-xs-12 mx-auto">
                    <div class="contact-form section-bg" style="background-image: url({{asset('assets-front/images/contact-1-720x480.jpg')}})">
                        <form id="contact" action="{{route('reset.password2')}}" method="POST">
                        @csrf
                          <input type="hidden" name="token" value="{{ $token }}">
                        
                          <div class="row">

                            <div class="col-md-12 col-sm-12">
                              <fieldset>
                                <input name="email" type="email" id="email" placeholder="Your Email*" required>
                              </fieldset>
                            </div>

                            <div class="col-md-12 col-sm-12">
                              <fieldset>
                                <input name="password" type="password" id="subject" placeholder="Your Password*" required>
                              </fieldset>
                            </div>
                            <div class="col-md-12 col-sm-12">
                              <fieldset>
                                <input name="renewPassword" type="password" id="subject" placeholder="Your Password*" required>
                              </fieldset>
                            </div>
                           
                            
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button" style="width: 100%;">Reset</button>
                              </fieldset>
                            </div>
                          

                          </div>
                          
                        </form>



                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->
    

    @endsection
