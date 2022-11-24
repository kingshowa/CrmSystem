
@extends("layouts.nav-utilisateurs")

@Section("utilisateurs")

<main id="main" class="main">

<div class="pagetitle">
  <h1>Utilisateurs</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item"><a href="utilisateurs-view.html">Utilisateurs</a></li>
      <li class="breadcrumb-item active">View Utilisateur</li>
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
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Utilisateurs</button>
            </li>

            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
            </li>

          </ul>
          <div class="tab-content pt-2 col-xl-8">

            <div class="tab-pane fade show active profile-overview" id="profile-overview">


              <h5 class="card-title">Utilisateurs Details</h5>

              <div class="row">
                <div class="col-lg-3 col-md-4 label ">First Name</div>
                <div class="col-lg-9 col-md-8">{{$utilisateur->nom}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Sure Name</div>
                <div class="col-lg-9 col-md-8">{{$utilisateur->prenom}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Email</div>
                <div class="col-lg-9 col-md-8">{{$utilisateur->email}}</div>
              </div>
<!--
              <div class="row">
                <div class="col-lg-3 col-md-4 label">PassWord</div>
                <div class="col-lg-9 col-md-8">k.anderson@example.com</div>
              </div>
-->
            </div>

            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

              <!-- Profile Edit Form -->
              <form>

                <div class="row mb-3">
                  <label for="firstName" class="col-md-4 col-lg-3 col-form-label">First Name</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="firstName" type="text" class="form-control" id="firstName" value="{{$utilisateur->nom}}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="surName" class="col-md-4 col-lg-3 col-form-label">Surname</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="surName" type="text" class="form-control" id="surName" value="{{$utilisateur->prenom}}">
                  </div>
                </div>

               <div class="row mb-3">
                  <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="email" type="email" class="form-control" id="Email" value="{{$utilisateur->email}}">
                  </div>
                </div>
                <!--
                <div class="row mb-3">
                  <label for="Email" class="col-md-4 col-lg-3 col-form-label">Password</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="password" type="password" class="form-control" id="password" value="k.anderson@example.com">
                  </div>
                </div>
-->
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
              </form><!-- End Profile Edit Form -->

            </div>

            <div class="tab-pane fade pt-3" id="profile-settings">

              <!-- Settings Form -->
              <form method="get" action="confirm-operation.html">

                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label"></label>
                  <div class="col-md-8 col-lg-9">
                    
                    <div class="form-check">
                      <input class="form-check-input" type="radio" value="delete" name="gridRadios" id="proOffers" checked>
                      <label class="form-check-label" for="proOffers">
                        Delete Utilisateurs
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