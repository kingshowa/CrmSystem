@extends("layouts.frontOfficeMaster")

@Section("frontContent")



<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{url('front-office')}}" class="logo">KMIH<em> carSale</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{url('front')}}">Home</a></li>
                            <li><a href="{{url('showcar')}}" class="active">Cars</a></li>

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
                        <h2>manage your <em>details</em></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    


    <style>
        a > .bi{
            font-size: 25px;
            margin-right: 15px;
        }
        .ligne{
            border:1px solid #ff5c33;
            width: 0.2em; 
            height:300px;
            background-color:#ff5c33;
            border-radius:5px;
            opacity: 0.2;
            margin-left:500px;
            margin-top:-300px;
            margin-right:100px;
        }
        p{
            /* background-color:#ff5c33; */
            border:1px solid #ffd6cc;
            border-radius:4px;
            width:500px;
            padding-left:15px;

        }
    </style>


    <!-- ***** Fleet Starts ***** -->
    @if($produit != null)
    <section class="section" id="trainers">
        <div class="container">
            
            <br>

            <div class="row" id="tabs">
             
              <div class="col-lg-8">
                <section class='tabs-content' style="width: 100%;">
                 
               <br>
                  <article id='tabs-2'>
                    <!-- <h4>Company Details</h4> -->
                    <h1>Lead Information</h1><br><br>
                  
                    <div class="row">
                        <div class="col-sm-8">
                            <img src="{{asset('storage/images/'.$produit->photo)}}" width="450" hight="600" alt="Logo">
                       <div class="ligne"></div> </div>
                    <!-- </div>

                    <br>
                    
                    <div class="row"> -->
                    <div class="col-sm-1"> </div>
                        <div class="col-sm-3">
                            <label>Car Name</label>
                            <p>{{$produit->nom}}</p>
                        <!-- </div>

                        <div class="col-sm-4"> -->
                            <label>Type</label>
                            <p>{{$produit->type}}</p>
                        <!-- </div>

                        <div class="col-sm-4"> -->
                            <label>Description</label>
                            <p>{{$produit->desc}}</p>
                        <!-- </div>

                        <div class="col-sm-4"> -->
                            <label>Prix</label>
                            <p>{{$produit->prix}}
                            <span style="padding-left:375px;">DZD</span></p>
                        </div>

                
                      
                    </div>
                    
                   </article>
                </section>
               
              </div>
            </div>
        </div>
    </section>
    @endif
    

  @endsection


