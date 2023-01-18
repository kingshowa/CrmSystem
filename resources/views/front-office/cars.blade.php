@extends("layouts.frontOfficeMaster")

@Section("frontContent")


<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    
        <div class="container">
            <div class="row">
                <div class="col-12">
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
            <div id="column">
                <div class="row">
                    <table>
                        <tr>
            
        @foreach($produits as $produit)
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{asset('storage/images/'.$produit->photo)}}" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                              <div id="prix"> <sup>dz</sup>{{$produit->prix}}</div>
                            </span>

                            <p>
                                <i class="fa fa-dashboard"></i> 130 000km &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cube"></i> 1800 cc &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cog"></i> {{$produit->type}} &nbsp;&nbsp;&nbsp;
                            </p>

                            <ul class="social-icons">
                                <li><a href="{{route('carview',$produit->id)}}" >+ View Car</a></li>
                                <button type="button" data-toggle="modal" data-target="#EditBookModalLabel" value="{{ $produit->id }}" class="btn btn-warning btn-xs editbtn" style="margin-right:5px;">
                            </ul>
                        </div>
                    </div>
                     </div>
                </div>
             
                @endforeach
</tr></table>
                </div>
                </div>
                </div>

               
                

            <br>
 <script>
         $(document).ready(function(){
         $(document).on('click','.editbtn',function(){
            var produit_id = $(this).val();
            $.ajax({
               type:"GET",
               url:"/book-edit/"+produit_id,
               success:function(response){
                  $('#bookId').val(response.produitdata.nom);
                 
                  $('#bookAuthor').val(response.produitdata.desc);
                  $('#bookStatus').val(response.produitdata.photo);
                  $('#bookId').val(produit_nom);

                  var div = document.getElementById('bookName');
                div.innerHTMl='response.produitdata.desc';
               }
            });
         });
      });
</script>


                
            <nav>
              
                <div class="text-center">
               
                {{ $produits->links() }}
                  
               </div>
              
            </nav>

        </div>
        <style>
            .w-5{
                display:none;

            }
        </style>
    </section>
    <!-- ***** Fleet Ends ***** -->

@endsection