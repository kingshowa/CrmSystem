@extends("layouts.nav-prospects")

@Section("prospects")

<main id="main" class="main">

    <div class="pagetitle">
      <h1>View Prospect</h1>
      <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{url('prospects')}}">Prospects</a></li>
          <li class="breadcrumb-item active">View prospect</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
    @if(session()->has('echec'))
                <div class="alert alert-warning">
                  {{session()->get('echec')}}
                </div>
               @endif
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
                  <button class="nav-link {{ $b }}" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit prospects</button>
                </li>
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-transformation">Transformation</button>
                </li>

              </ul>
              <div class="tab-content pt-2 col-xl-8">

                <div class="tab-pane fade {{ $a }} {{ $a1 }} profile-overview" id="profile-overview">


                  <h5 class="card-title">Prospects Details</h5>


                  @if($prospect != null)


                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Last name</div>
                    <div class="col-lg-9 col-md-8">{{$prospect->nom}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">First name</div>
                    <div class="col-lg-9 col-md-8">{{$prospect->prenom}}</div>
                  </div>


                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Company</div>
                    <div class="col-lg-9 col-md-8">{{$prospect->societe}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Role</div>
                    <div class="col-lg-9 col-md-8">{{$prospect->fonction}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
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

                <div class="tab-pane fade {{ $b }} {{ $b1 }} profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form action="{{route('update_pro',$prospect->id)}}" method="POST">
                    
                  <input type="hidden" name="_method" value="PUT">
                  {{ csrf_field() }}

                    <div class="row mb-3">
                      <label for="firstName" class="col-md-4 col-lg-3 col-form-label">Last name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="nom" type="text" class="form-control" id="firstName" value="{{$prospect->nom}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="prenom" class="col-md-4 col-lg-3 col-form-label">First name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="prenom" type="text" class="form-control" id="prenom" value="{{$prospect->prenom}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="societe" class="col-md-4 col-lg-3 col-form-label">Company</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="societe" type="text" class="form-control" id="societe" value="{{$prospect->societe}}">
                      
                      </div>
                    
                    </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Role</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="fonction" type="text" class="form-control" id="Job" value="{{$prospect->fonction}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">Address</label>
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
                      <label for="site_web" class="col-md-4 col-lg-3 col-form-label">Website</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="site_web" type="text" class="form-control" id="site_web" value="{{$prospect->site_web}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="source" class="col-md-4 col-lg-3 col-form-label">Source</label>
                      <div class="col-md-8 col-lg-9">
                        <div class="col-sm-12">
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
                      <button type="submit" class="btn btn-primary">Modifier</button>
                    </div>
                  </form><!-- End Profile Edit Form -->




                </div>
                <!--Profile transformation-->
               

                <div class="tab-pane fade profile-edit pt-3" id="profile-transformation">
                  <div class="text-center">
                     <a href="{{url('transforme',$prospect->id)}}"> <button name="Transformation" type="button" class="btn btn-primary">Transformation</button></a>
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