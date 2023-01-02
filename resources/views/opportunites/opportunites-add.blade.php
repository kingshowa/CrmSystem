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
                  <label for="firstName" class="col-md-4 col-lg-3 col-form-label">Opportunity name</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="nom" type="text" class="form-control" id="firstName">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="about" class="col-md-4 col-lg-3 col-form-label">Stage</label>
                  <div class="col-md-8 col-lg-9">
                    <select class="form-select" name="etapes" aria-label="Default select example">
                      <option selected>--Select stage--</option>
                      <option value="Prospection">Prospection</option>
                      <option value="Proposition">Proposition/Devis</option>
                      <option value="Verification">, Négociation/Vérification</option>
                      <option value="cgangee">Clôturée/Gagnée</option>
                      <option value="cperdue">Clôturée/Perdue</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Date expected</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="date_cloture" type="date" class="form-control" id="Phone">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Discount</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="remise" type="number" class="form-control" id="Phone">
                  </div>
                </div>

                <div class="row mb-3">
                      <label  class="col-md-4 col-lg-3 col-form-label">Client</label>
                      <div class="col-md-8 col-lg-9">
                        <select class="form-select" id="select_box" name="client">
                          <option selected>Choose Client</option>
                          @foreach($clients as $client)
                          <option value="{{$client->id}}">{{$client->societe}}</option>
                          @endforeach
                        </select>
                       
                      </div>
                    </div>

                <!-- <div class="row mb-3">
                  <label for="Email" class="col-md-4 col-lg-3 col-form-label">Produit</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="produits" type="text" class="form-control" id="Email">
                  </div>
                </div> -->

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Save Opportunites</button>
                </div>
              </form>

        </div>
      </div>

    </div>

  </div>
</section>

</main><!-- End #main -->

@endsection