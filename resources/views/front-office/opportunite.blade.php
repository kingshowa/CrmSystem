@extends("layouts.frontOfficeMaster")

@Section("frontContent")

@php ($label = 'login')

@if(1==1)
@php ($label = 'account')
@endif

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{url('front')}}" class="logo">KMHI<em> carSale</em></a>
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
                            <li id="login"><a href="{{url('front-office/login')}}">account</a></li>
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
                        <h2>your opportunity <em>details</em></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

              @if($opportunite->etape == 'Gangee')
                @php ($fact = 'Invoice')
              @else
                @php ($fact = 'Quotation') 
              @endif

    <style>
        a > .bi{
            font-size: 25px;
            margin-right: 15px;
        }
        .ttt{
          font-size: 30px;
        }
    </style>


    <!-- ***** Fleet Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            
            <br>

            <div class="row" id="tabs">
              <div class="col-lg-4">
                <br>
                <ul>
                  <li><a href='#tabs-1'><i class="bi bi-gem"></i> Opportunity Overview</a></li>
                  <li><a href='#tabs-2'><i class="bi bi-file-earmark-ruled-fill"></i> Opportunity {{$fact}}</a></li>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content' style="width: 100%;">
                <article id='tabs-1'>
                  <h4>Opportuny Details</h4>

                        @if($opportunite != null)
  
                    <br>

                    <div class="row">

                        <div class="col-sm-6">
                          <label>Opportunity Name</label>
                          <p>{{$opportunite->nom}}</p>
                        </div>

                        <div class="col-sm-6">
                          <label>Stage</label>
                          <p>{{$opportunite->etape}}</p>
                        </div>

                        <div class="col-sm-6">
                          <label>Amount</label>
                          <p>{{$amount}} DZD</p>
                        </div>

                        <div class="col-sm-6">
                          <label>Closing Date</label>
                          <p>{{$opportunite->date_cloture}}	</p>
                        </div>

                        <div class="col-sm-6">
                          <label>Client</label>
                          <p>{{$opportunite->client}}</p>
                        </div>

                    </div>  
                    
                  <h5 class="card-title">
                    Products
                  </h5>

                  <table class="table table-danger">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product name</th>
                        <th scope="col">Type</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Unity Price</th>
                        <th scope="col">Total Price</th>
                        <!-- <th scope="col" colspan="2">Actions</th> -->
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                      <tr>
                        <th scope="row">{{$product->id}}<a href="#"></a></th>
                        <td>{{$product->nom}}</td>
                        <td>{{$product->type}}</td>                     
                        <td>{{$product->quantite}}</td>  
                        <td>{{$product->prix}}</td>
                        <td>{{$product->prix * $product->quantite}}</td>
                        
                       </tr>
                      @endforeach
                                
                    </tbody>
                  </table>

                        @endif
                  </article>

                  <article id='tabs-2'>

                  <h5 class="card-title ttt"> {{$fact}} </h5>
                                  <div class="row">
                                    <div class="col-lg-10 col-md-9 label"></div>
                                    <div class="col-lg-2 col-md-3" style="color:red;font-weight:bold;">No: 00000{{$opportunite->id}}</div>
                                  </div> 

                                  <div class="row">
                                    <div class="col-lg-4 col-md-4 label">Company</div>
                                    <div class="col-lg-8 col-md-8">{{$client[0]->societe}}</div>
                                  </div>

                                  <div class="row">
                                    <div class="col-lg-4 col-md-4 label">Adresse</div>
                                    <div class="col-lg-8 col-md-8">{{$client[0]->adresse}}</div>
                                  </div>
                                  <div class="row">
                                    <div class="col-lg-4 col-md-4 label">Telephone</div>
                                    <div class="col-lg-8 col-md-8">{{$client[0]->telephone}}</div>
                                  </div>
                              
                                  <div class="row">
                                    <div class="col-lg-4 col-md-4 label">Closing Date</div>
                                    <div class="col-lg-8 col-md-8">{{$opportunite->date_cloture}}	</div>
                                  </div>

                                  <div class="row">
                                    <div class="col-lg-4 col-md-4 label">Amount</div>
                                    <div class="col-lg-8 col-md-8">{{$amount}} DZD</div>
                                  </div>
                                  <div class="row">
                                    <div class="col-lg-4 col-md-4 label">Discount</div>
                                    <div class="col-lg-8 col-md-8">{{$opportunite->remise}} %</div>
                                  </div>
                                  <div class="row">
                                    <div class="col-lg-4 col-md-4 label">Amount with discount</div>
                                    <?php $p=($amount*$opportunite->remise)/100;
                                          $t=$amount-$p;?>
                                    <div class="col-lg-8 col-md-8">{{$t}} DZD</div>
                                  </div>

                                <br>

                                  <table class="table table-striped ">
                                    <thead>
                                      <tr>
                                        
                                        <th scope="col">Product name</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Unity Price</th>
                                        <th scope="col">Total Price</th>
                                      
                                      </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                      <tr>
                                      
                                        <td>{{$product->nom}}</td>
                                        <td>{{$product->quantite}}</td>                     
                                        <td>{{$product->prix}}</td>
                                        <td>{{$product->prix * $product->quantite}}</td>
                                      </tr>
                                      @endforeach
                                                
                                    </tbody>
                                  </table>

                                  @if($fact=="Quotation")
                                  <a href="{{route('devisdownload',$opportunite->id)}}">
                                    <button class="btn btn-success" style="float: right;">Download {{$fact}}</button>
                                  </a>
                                  @else
                                  <a href="{{route('facturedownload',$opportunite->id)}}">
                                    <button class="btn btn-success" style="float: right;">Download {{$fact}}</button>
                                  </a>  
                                  @endif 

                  </article>

                </section>
              </div>
            </div>
        </div>
    </section>

  @endsection