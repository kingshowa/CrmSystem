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
                        <a href="{{url('front')}}" class="logo">KMHI<em> carSale</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{url('front')}}">Home</a></li>
                            <li><a href="{{url('showcar')}}">Cars</a></li>
                            <li><a href="{{url('showteam')}}" class="active">Team</a></li>
                            
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
            @foreach($utilisateurs as $utilisateur)
            <div id="column">
            <div class="row">
            <div class="row">
            <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="/storage/imag/{{$utilisateur->image}}" alt="">
                        </div>
                        <div class="down-content">
                            <span>{{$utilisateur->nom}}</span>
                            <h4>John Doe</h4>
                            <ul class="social-icons">
                                <li><a href="mailto:kingshowa1@gmail.com"><i class="fa fa-envelope"></i></a></li>
                                <li><a href="mailto:kingshowa1@gmail.com">email@gmail.com</a></li> 
                            </ul>
                        </div>
                    </div> 
                    </div>
                    </div>
                    </div>
</div>
                    @endforeach
                </div>
                <div class="text-center">
               
               {{ $utilisateurs->links() }}
                 
              </div>
               
            
       
    </section>

    @endsection