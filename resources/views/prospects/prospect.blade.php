@extends("layouts.nav-prospects")

@Section("prospects")

<main id="main" class="main">

    <div class="pagetitle">
      <h1>prospects</h1>
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
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit prospects</button>
                </li>
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-transformations">Transformations</button>
                </li>

              </ul>
              <div class="tab-content pt-2 col-xl-8">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">


                  <h5 class="card-title">Prospects Details</h5>


                  @if($prospect != null)


                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nom</div>
                    <div class="col-lg-9 col-md-8">{{$prospect->nom}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Prenom</div>
                    <div class="col-lg-9 col-md-8">{{$prospect->prenom}}</div>
                  </div>


                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Societe</div>
                    <div class="col-lg-9 col-md-8">{{$prospect->societe}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Fonction</div>
                    <div class="col-lg-9 col-md-8">{{$prospect->fonction}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Addresse</div>
                    <div class="col-lg-9 col-md-8">{{$prospect->adresse}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Telephone</div>
                    <div class="col-lg-9 col-md-8">{{$prospect->telephone}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8">{{$prospect->email}}</div>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form action="{{url('prospect/'.$prospect->id)}}" method="POST">
                  <input type="hidden" name="_method" value="PUT">
                  {{ csrf_field() }}

                    <div class="row mb-3">
                      <label for="firstName" class="col-md-4 col-lg-3 col-form-label">Nom</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="nom" type="text" class="form-control" id="firstName" value="{{$prospect->nom}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="prenom" class="col-md-4 col-lg-3 col-form-label">Prenom</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="prenom" type="text" class="form-control" id="prenom" value="{{$prospect->prenom}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="societe" class="col-md-4 col-lg-3 col-form-label">Societe</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="societe" type="text" class="form-control" id="societe" value="{{$prospect->societe}}">
                      
                      </div>
                    
                    </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Fonction</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="fonction" type="text" class="form-control" id="Job" value="{{$prospect->fonction}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">Adresse</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="adresse" class="form-control" id="about" value="{{$prospect->adresse}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Telephone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="telephone" type="text" class="form-control" id="Phone" value="{{$prospect->telephone}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="{{$prospect->email}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="site_web" class="col-md-4 col-lg-3 col-form-label">Site web</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="site_web" type="text" class="form-control" id="site_web" value="{{$prospect->site_web}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="source" class="col-md-4 col-lg-3 col-form-label">Source</label>
                      <div class="col-md-8 col-lg-9">
                        <div class="col-md-8 col-lg-9">
                          <select class="form-select" arial-label="Default select example" name="source">
                                <option value="Web" selected>Web</option>
                                <option value="Téléphone" >Téléphone</option>
                                <option value="Partenaire" >Partenaire</option>
                                <option value="Salon" >Salon</option>
                                <option value="Bouche à oreille" >Bouche à oreille</option>
                                <option value="Salon" >Salon</option>
                                <option value="Liste prospects" >Liste prospects</option>
                                <option value="Autre" > Autre</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="statut" class="col-md-4 col-lg-3 col-form-label">Statut</label>
                      <div class="col-md-8 col-lg-9">
                          <div class="col-sm-12">
                            <select class="form-select" aria-label="Default select example" name="statut">
                                <option value="Froid" selected="">Froid</option>
                                <option value="Chaud">Chaud</option>
                            </select>
                          </div>
                      </div>
                    </div>
                    
                    @endif
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->



                   <!-- Profile Transformation Form -->
                  <div class="tab-pane fade profile-edit pt-3" id="profile-transformations">
                    <form action="{{url('prospect/'.$prospect->id)}}" method="POST">
                      <input type="hidden" name="_method" value="PUT">
                                  
                        <div class="row mb-3">
                              <div class="col-md-8 col-lg-9">
                                  <div class="form-check">
                                      <input class="form-check-input" type="radio" value="{{url('prospect/')}}" name="gridRadios" id="changesMade" checked>
                                        <label class="form-check-label" for="changesMade">
                                                    Transformation en Contacts
                                        </label>
                                    </div>
                             <div class="form-check">
                                     <input class="form-check-input" type="radio" value="{{url('client/')}}" name="gridRadios" id="newProducts">
                                     <label class="form-check-label" for="newProducts">
                                                Transformation en Clients
                                      </label>
                             </div>
                   <div class="form-check">
                          <input class="form-check-input" type="radio" value="delete" name="gridRadios" id="proOffers">
                            <label class="form-check-label" for="proOffers">
                                  Delete prospect
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



                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

@endsection