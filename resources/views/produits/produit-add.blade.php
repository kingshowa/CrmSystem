@extends("layouts.nav-produits")

@Section("produits")

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Produits</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="{{url('/produits')}}">Produits</a></li>
          <li class="breadcrumb-item active">Add Produits</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">

        <div class="col-xl-12">

          <div class="card"> 
            <div class="card-body pt-3 col-xl-8">

              <form action="{{url('produit/store')}}" method="POST" enctype="multipart/form-data">
              {{ csrf_field()}}  
                    <div class="row mb-3">
                      <label for="Nom" class="col-md-4 col-lg-3 col-form-label">Nom</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="Nom" type="text" class="form-control" id="Nom">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Prix" class="col-md-4 col-lg-3 col-form-label">Prix</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="Prix" type="text" class="form-control" id="Prix">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Quantites" class="col-md-4 col-lg-3 col-form-label">Quantites</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="quantitie" type="number" class="form-control" id="Quantites">
                      </div>
                    </div>
                    
                    <div class="row mb-3">
                      <label for="Photo" class="col-md-4 col-lg-3 col-form-label">Photo</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="Photo" type="file" class="form-control" id="Photo" width="60px" height="60px" accept="image/png, image/jpeg">
                      </div>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Produits</button>
                    </div>
                  </form>

            </div>
          </div>

        </div>

      </div>
    </section>




  </main><!-- End #main -->

@endsection