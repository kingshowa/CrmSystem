@extends("layouts.nav-opportunities")

@Section("opportunites")

<main id="main" class="main">

<div class="pagetitle">
  <h1>Add Opportunites</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
      <li class="breadcrumb-item"><a href="{{url('opportunites')}}">Opportunites</a></li>
      <li class="breadcrumb-item active">Add Opportunites</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section profile">
  <div class="row">

    <div class="col-xl-12">

      <div class="card"> 
        <div class="card-body pt-3 col-xl-8">

          <form action="{{ route('store_opportunite') }}" method="POST">
          {{ csrf_field()}}
                <div class="row mb-3">
                  <label for="firstName" class="col-md-4 col-lg-3 col-form-label">Nom</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="nom" type="text" class="form-control" id="firstName">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="surName" class="col-md-4 col-lg-3 col-form-label">Montant</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="montant" type="text" class="form-control" id="surName">
                  </div>
                </div>


                <div class="row mb-3">
                  <label for="about" class="col-md-4 col-lg-3 col-form-label">Stage</label>
                  <div class="col-md-8 col-lg-9">
              
                    <div class="col-sm-12">
                      <select class="form-select" aria-label="Default select example">
                        <option selected="">Prospection</option>
                        <option value="1">Proposition</option>
                        <option value="2">Verification</option>
                        <option value="3">Gangee</option>
                        </select>
                    </div>
            
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Date_cloture</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="date_cloture" type="date" class="form-control" id="Phone">
                  </div>
                </div>

                <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Client</label>
                      <div class="col-md-8 col-lg-9">
                        <select class="form-select" id="select_box" name="client">
                          <option selected>Choose Client</option>
                          @foreach($clients as $client)
                          <option value="{{$client->societe}}">{{$client->societe}}</option>
                          @endforeach
                        </select>
                        <!-- <input name="client"  type="text" class="form-control" id="Email" required> -->
                       
                      </div>
                    </div>

                <div class="row mb-3">
                  <label for="Email" class="col-md-4 col-lg-3 col-form-label">Produit</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="produits" type="text" class="form-control" id="Email">
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Save Opportunites</button>
                </div>
              </form><!-- End Profile Edit Form -->

        </div>
      </div>

    </div>

  </div>
</section>

</main><!-- End #main -->

@endsection