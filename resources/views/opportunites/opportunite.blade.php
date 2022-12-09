@extends("layouts.nav-opportunities")

@Section("opportunites")

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Opportunite</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{url('opportunites')}}">Opportunite</a></li>
          <li class="breadcrumb-item active">Details Opportunite</li>
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
                  <button class="nav-link {{ $b }}" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Opportunite</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
                </li>

              </ul>
              <div class="tab-content pt-2 col-xl-8">
              @if($opportunite != null)
                <div class="tab-pane fade {{ $a }} {{ $a1 }} profile-overview" id="profile-overview">


                  <h5 class="card-title">Opportunite Details</h5>

                 

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nom</div>
                    <div class="col-lg-9 col-md-8">{{$opportunite->nom}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Stage</div>
                    <div class="col-lg-9 col-md-8">{{$opportunite->montant}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Date de Clôture</div>
                    <div class="col-lg-9 col-md-8">{{$opportunite->date_cloture}}	</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Client</div>
                    <div class="col-lg-9 col-md-8">{{$opportunite->client}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Produit</div>
                    <div class="col-lg-9 col-md-8">{{$opportunite->produits}}</div>
                  </div>
                </div>

                <div class="tab-pane fade {{ $b }} {{ $b1 }} profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form action="{{url('opportunite/'.$opportunite->id)}}" method="POST">
                  <input type="hidden" name="_method" value="PUT">
                  {{ csrf_field() }}

                    <div class="row mb-3">
                      <label for="firstName" class="col-md-4 col-lg-3 col-form-label">Nom</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="nom" type="text" class="form-control" id="name" value="{{$opportunite->nom}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="surName" class="col-md-4 col-lg-3 col-form-label">Montant</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="montant" type="text" class="form-control" id="stage" value="{{$opportunite->montant}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">Date de Clôture</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="date_cloture" type="text" class="form-control" id="closing" value="{{$opportunite->date_cloture}}">
                      </div>
                    </div>

                    <!--<div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Client</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="client" type="text" class="form-control" id="customer" value="{{$opportunite->client}}">
                      </div>
                    </div>-->

                    <!--<div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Produit</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="produits" type="text" class="form-control" id="Product" value="{{$opportunite->produits}}">
                      </div>
                    </div>-->
                   
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Modifier</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-settings">

                  <!-- Settings Form -->
                  <form method="GET" action="confirm-operation.html">

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label"></label>
                      <div class="col-md-8 col-lg-9">
                        
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value="delete" name="gridRadios" id="proOffers" >
                          <label class="form-check-label" for="proOffers">
                            Delete Opportunite
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

   
    @endif
    
  </main><!-- End #main -->

  @endsection