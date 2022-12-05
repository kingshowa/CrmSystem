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
                      <label for="firstName" class="col-md-4 col-lg-3 col-form-label">Nom</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="nom" type="text" class="form-control" id="firstName" require>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="surName" class="col-md-4 col-lg-3 col-form-label">Prenom</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="prenom" type="text" class="form-control" id="surName" require>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Societe</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="societe" type="text" class="form-control" id="company" require>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Fonction</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="fonction" type="text" class="form-control" id="Job" require>
                      </div>
                    </div>


                    <div class="row mb-3">
                      <label for="address" class="col-md-4 col-lg-3 col-form-label">Adresse</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="adresse" class="form-control" id="address" style="height: 100px"></textarea>
                      </div>
                    </div>


                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Téléphone</label>
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
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">Site Web</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="site_web" class="form-control" id="about" type="text" require>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">Source</label>
                      <div class="col-md-8 col-lg-9">
<<<<<<< HEAD
                        <div class="col-md-8 col-lg-9">
                          <select class="form-select" arial-label="Default select example">
                                <option selected="">Web</option>
                                <option value="1" >Téléphone</option>
                                <option value="2" >Partenaire</option>
                                <option value="3" >Salon</option>
                                <option value="4" >Bouche à oreille</option>
                                <option value="5" >Salon</option>
                                <option value="6" >Liste prospects</option>
                                <option value="7" > Autre</option>
                          </select>
                        </div>
                      </div>
=======
                        <select class="form-select" id="select_box" name="source">
                         
                          <option value="web">web</option>
                          <option value="telehone">Téléphone</option>
                          <option value="Partenaire">Partenaire</option>
                          <option value=" Salon"> Salon</option>
                          <option value=" Bouche à oreille"> Bouche à oreille</option>
                          <option value=" autre">Autre</option>
                        
                        </select>
>>>>>>> ee6af506326dda05d46a5fe60c95ea034c322e79
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">Statut</label>
                        <div class="col-md-8 col-lg-9">
                          <div class="col-sm-12">
                            <select class="form-select" aria-label="Default select example">
                                <option selected="">Froid</option>
                                <option value="1">Chaud</option>
                            </select>
                          </div>
                        </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save prospect</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

            </div>
          </div>

        </div>

      </div>
    </section>

  </main><!-- End #main -->

@endsection