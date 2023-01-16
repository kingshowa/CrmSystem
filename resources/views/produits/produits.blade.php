@extends("layouts.nav-produits")

@Section("produits")
<main id="main" class="main">

<div class="pagetitle">
  <h1>View Product</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item"><a href="{{url('/produits')}}">Products</a></li>
      <li class="breadcrumb-item active">View Product</li>
    </ol>
  </nav>
  
</div><!-- End Page Title -->

<section class="section profile">
  <div class="row">

    <div class="col-xl-12">

      <div class="card">
        <div class="card-body pt-3">
          <!-- Bordered Tabs -->

          @php ($a = 'active')
              @php ($b = '')
              @php ($a1 = 'show')
              @php ($b1 = '')

              @if($action==2)
                @php ($b = 'active')
                @php ($a = '')
                @php ($a1 = '')
                @php ($b1 = 'show')
              @endif

          <ul class="nav nav-tabs nav-tabs-bordered">

            <li class="nav-item">
              <button class="nav-link {{ $a }}" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
            </li>

            <li class="nav-item">
              <button class="nav-link {{ $b }}" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Product</button>
            </li>

            

          </ul>
          <div class="tab-content pt-2 col-xl-8">
          @if($produit != null)
            <div class="tab-pane fade {{ $a }} {{ $a1 }} profile-overview" id="profile-overview">


              <h5 class="card-title">Produits Details</h5>

              <div class="row">
                <div class="col-lg-3 col-md-4 label ">Product name</div>
                <div class="col-lg-9 col-md-8">{{$produit->nom}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Price</div>
                <div class="col-lg-9 col-md-8">{{$produit->prix}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Quantity</div>
                <div class="col-lg-9 col-md-8">{{$produit->quantitie}}</div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-4 label">Type</div>
                <div class="col-lg-9 col-md-8">{{$produit->type}}</div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-4 label">Description</div>
                <div class="col-lg-9 col-md-8">{{$produit->desc}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Photo</div>
                <div class="col-lg-9 col-md-8">
  
                   <img src="{{asset('storage/images/'.$produit->photo)}}" width="100" height="100">

                  </div> 
              </div>
            </div>

            <div class="tab-pane fade {{ $b }} {{ $b1 }} profile-edit pt-3" id="profile-edit">

              <!-- Profile Edit Form -->
              <form action="{{url('produits/update/'.$produit->id)}}" method="POST">
              <input type="hidden" name="_method" value="PUT" >
              {{ csrf_field() }}
                <div class="row mb-3">
                  <label for="Nom" class="col-md-4 col-lg-3 col-form-label">Product name</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="Nom" type="text" class="form-control" id="Nom" value="{{$produit->nom}}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Prix" class="col-md-4 col-lg-3 col-form-label">Price</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="Prix" type="text" class="form-control" id="Prix" value="{{$produit->prix}}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Quantite" class="col-md-4 col-lg-3 col-form-label">Quantity</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="quantitie" type="number" class="form-control" id="Quantite" value="{{$produit->quantitie}}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="Quantite" class="col-md-4 col-lg-3 col-form-label">Type</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="type" type="text" class="form-control" id="Quantite" value="{{$produit->type}}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="Quantite" class="col-md-4 col-lg-3 col-form-label">Description</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="desc" type="text" class="form-control" id="Quantite" value="{{$produit->desc}}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Photo" class="col-md-4 col-lg-3 col-form-label">Photo</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="Photo" type="file"  accept="image/png, image/jpg" class="form-control" id="Photo" value="Mercedes_Classe_C_002.jpg ">
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
              </form><!-- End Profile Edit Form -->

            </div>
          @endif
            <div class="tab-pane fade pt-3" id="profile-settings">

              <!-- Settings Form -->
              <form>

                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label"></label>
                  <div class="col-md-8 col-lg-9">
                    
                    <div class="form-check">
                      <input class="form-check-input" type="radio" value="delete" name="gridRadios" id="proOffers" checked>
                      <label class="form-check-label" for="proOffers">
                        Delete Produits
                      </label>
                    </div>
                  
                  </div>
                </div>

                <div class="text-center">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                    Save Changes
                  </button>
                  
                  <div class="modal fade" id="basicModal" tabindex="-1">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Basic Modal</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Non omnis incidunt qui sed occaecati magni asperiores est mollitia. Soluta at et reprehenderit. Placeat autem numquam et fuga numquam. Tempora in facere consequatur sit dolor ipsum. Consequatur nemo amet incidunt est facilis. Dolorem neque recusandae quo sit molestias sint dignissimos.
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div><!-- End Basic Modal-->

                </div>
              </form><!-- End settings Form -->

            </div>


          </div><!-- End Bordered Tabs -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

@endsection