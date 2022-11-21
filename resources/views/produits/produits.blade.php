@extends("layouts.nav-contacts")

@Section("contacts")
<main id="main" class="main">

<div class="pagetitle">
  <h1>Produits</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item"><a href="produits-view.html">Produits</a></li>
      <li class="breadcrumb-item active">View Produits</li>
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
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Produits</button>
            </li>

            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
            </li>

          </ul>
          <div class="tab-content pt-2 col-xl-8">

            <div class="tab-pane fade show active profile-overview" id="profile-overview">


              <h5 class="card-title">Produits Details</h5>

              <div class="row">
                <div class="col-lg-3 col-md-4 label ">Nom</div>
                <div class="col-lg-9 col-md-8">Mercedes 190</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Prix</div>
                <div class="col-lg-9 col-md-8">2400 euros</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Quantites</div>
                <div class="col-lg-9 col-md-8">10</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Photo</div>
                <div class="col-lg-9 col-md-8"><img src="Mercedes_Classe_C_002.jpg" width="100px" height="100px"></div>
              </div>
            </div>

            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

              <!-- Profile Edit Form -->
              <form>

                <div class="row mb-3">
                  <label for="Nom" class="col-md-4 col-lg-3 col-form-label">Nom</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="Nom" type="text" class="form-control" id="Nom" value="Mercedes 190">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Prix" class="col-md-4 col-lg-3 col-form-label">Prix</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="Prix" type="text" class="form-control" id="Prix" value="2400 euros">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Quantite" class="col-md-4 col-lg-3 col-form-label">Quantite</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="Quantite" type="number" class="form-control" id="Quantite" value="10">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Photo" class="col-md-4 col-lg-3 col-form-label">Photo</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="Photo" type="file"  accept="image/png, image/jpeg" class="form-control" id="Photo" value="Mercedes_Classe_C_002.jpg ">
                  </div>
                </div>
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