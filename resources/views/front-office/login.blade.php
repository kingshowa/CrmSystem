@extends("layouts.frontOfficeMaster")

@Section("frontContent")



<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{url('front')}}" class="logo">KMIH<em> carSale</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{url('front')}}">Home</a></li>
                            <li><a href="{{url('showcar')}}">Cars</a></li>

                            <li><a href="{{url('showteam')}}">Team</a></li>
                            
                            <li><a href="{{url('front-office/contact')}}">Contact</a></li>

                            @if(isset($_SESSION['contact']))
                            <li id="login"><a href="{{url('front-office/account/'.$_SESSION['contact'])}}">account</a></li> 
                            @else
                            <li id="login"><a href="{{url('front-office/login')}}">login</a></li>
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
        <div class="container-fluid" >
            <div class="row"  id="log">
                
                <div class="col-lg-5 col-md-5 col-xs-12 mx-auto">
                    <div class="contact-form section-bg" style="background-image: url({{asset('assets-front/images/contact-1-720x480.jpg')}})">
                        <form id="contact" action="{{route('verifier')}}" method="post">
                        @csrf
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
                            <div class="col-12">
                        
                        
                      </div>
                            
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button" style="width: 100%;">LOGIN</button>
                              </fieldset>
                            </div>
                            <!-- <a href="{{ url('front-office/account/2')}}"><button type="button" id="form-submit" class="main-button" >go to account</button></a> -->

                          </div>
                          <br>
                         
                          <a href="{{ url('forget') }}">Forget Password</a>
                          
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
