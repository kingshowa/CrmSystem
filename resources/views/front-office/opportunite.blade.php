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
                        <h2>feel free to manage your <em>details</em></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section profile" style="margin-top:40px;">
      <div class="row">

        <div class="col-xl-12">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->

              @php ($a = 'active')
              @php ($c = '')
              @php ($a1 = 'show')
              @php ($c1 = '')

              @if($action==2)
                @php ($c = 'active')
                @php ($a = '')
                @php ($a1 = '')
                @php ($c1 = 'show')
              @endif


              @if($opportunite->etape == 'Gangee')
                @php ($fact = 'Invoice')
              @else
                @php ($fact = 'Quotation') 
              @endif

              
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link {{ $a }}" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link {{ $c }}" data-bs-toggle="tab" data-bs-target="#facture">View {{$fact}}</button>
                </li>

              </ul>

              <div class="tab-content pt-2 col-xl-8">
              @if($opportunite != null)
                <div class="tab-pane fade {{ $a }} {{ $a1 }} profile-overview" id="profile-overview">


                  <h5 class="card-title">Opportunite Details</h5>                

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Opportunity Name</div>
                    <div class="col-lg-9 col-md-8">{{$opportunite->nom}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Stage</div>
                    <div class="col-lg-9 col-md-8">{{$opportunite->etape}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Amount</div>
                    <div class="col-lg-9 col-md-8">{{$amount}} DZD</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Closing Date</div>
                    <div class="col-lg-9 col-md-8">{{$opportunite->date_cloture}}	</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Client</div>
                    <div class="col-lg-9 col-md-8">{{$opportunite->client}}</div>
                  </div>

                </div>

                @endif

              </div><!-- End Bordered Tabs -->


              <div class="tab-content pt-2 col-xl-8">

                <div class="tab-pane fade {{ $c }} {{ $c1 }}  facture pt-3" id="facture">

                            <h5 class="card-title"> {{$fact}} </h5>
                                  <div class="row">
                                    <div class="col-lg-10 col-md-9 label "></div>
                                    <div class="col-lg-2 col-md-3" style="color:red;font-weight:bold;">No: 00000{{$opportunite->id}}</div>
                                  </div> 

                                  <div class="row">
                                    <div class="col-lg-4 col-md-4 label ">Company</div>
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
                </div>





              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="section">
      <div class="row">
        
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body">
                  <h5 class="card-title">
                    Products
                  </h5>

                  <table class="table table-dark">
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

                </div>

              </div>
            </div>
      </div>
    </section>

  @endsection