@extends("layouts.nav-prospects")

@Section("prospects")

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Add prospects</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{url('prospects')}}">prospects</a></li>
          <li class="breadcrumb-item active">Add prospects</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">

        <div class="col-xl-12">

          <div class="card"> 
            <div class="card-body pt-3 col-xl-8">

              <form action="{{ route('store_prospect') }}" method="POST">

              {{ csrf_field()}}



                    <div class="row mb-3">
                      <label for="firstName" class="col-md-4 col-lg-3 col-form-label">Last name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="nom" type="text" class="form-control" id="firstName" require>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="surName" class="col-md-4 col-lg-3 col-form-label">First name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="prenom" type="text" class="form-control" id="surName" require>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Company</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="societe" type="text" class="form-control" id="company" require>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Role</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="fonction" type="text" class="form-control" id="Job" require>
                      </div>
                    </div>


                    <div class="row mb-3">
                      <label for="address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="adresse" class="form-control" id="address" style="height: 30px"></textarea>
                      </div>
                    </div>


                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Telephone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="telephone" type="text" class="form-control" id="Phone" pattern="0(5|6|7)[0-9]{8}" require>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" require>
                      </div>
                    </div>


                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">Website</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="site_web" class="form-control" id="about" type="text" require>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">Source</label>
                      

                        <div class="col-md-8 col-lg-9">
                          <select class="form-select" arial-label="Default select example" name="source" required>
                                <option selected>--Choose Source--</option>
                                <option value="web">Web</option>
                                <option value="telephone" >Telephone</option>
                                <option value="partenaire" >Partenaire</option>
                                <option value="salon" >Salon</option>
                                <option value="bouche_a_oreille" >Word of mouth</option>
                                <option value="listep" >List of prospects</option>
                                <option value="autre" >Other</option>
                          </select>
                        </div>
                 
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">Statut</label>
                        <div class="col-md-8 col-lg-9">
                          <div class="col-sm-12">
                            <select class="form-select" aria-label="Default select example" name="statut" required>
                              <option selected>--Choose Status--</option>
                              <option value="Froid">Cold</option>
                              <option value="Chaud">Hot</option>
                            </select>
                          </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label"></label>
                      <div class="col-md-8 col-lg-9">
                        <button type="submit" class="btn btn-primary">Save prospect</button>
                      </div>
                    </div>
                  </form><!-- End Profile Edit Form -->

            </div>
          </div>

        </div>

      </div>
    </section>

  </main><!-- End #main -->

@endsection