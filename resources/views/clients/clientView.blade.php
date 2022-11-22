@extends("layouts.nav-clients")

@Section("clients")

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Client</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{url('clients')}}">Client</a></li>
          <li class="breadcrumb-item active">View Client</li>
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
                 <a href="#" > <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button></a>
                </li>

                <li class="nav-item">
                  <a href="#"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Client</button></a>
                </li>


              </ul>
              <div class="tab-content pt-2 col-xl-8">
                @if($client != null)
                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                

                  <h5 class="card-title">Client Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nom societe</div>
                    <div class="col-lg-9 col-md-8">{{$client->societe}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-8">{{$client->adresse}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8">{{$client->telephone}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Site Web</div>
                    <div class="col-lg-9 col-md-8">{{$client->site_web}}</div>
                  </div>

                 

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form action="{{url('client/update',$client->id)}}" method="POST">

                    <input type="hidden" name="_method" value="PUT" >
                    {{ csrf_field() }}

                    <div class="row mb-3">
                      <label for="firstName" class="col-md-4 col-lg-3 col-form-label">Societe</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="societe" type="text" class="form-control" id="firstName" value="{{$client->societe}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="surName" class="col-md-4 col-lg-3 col-form-label">Telephone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="telephone" type="text" class="form-control" id="surName" value="{{$client->telephone}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="adresse" class="form-control" id="about"value="{{$client->adresse}}" style="height: 100px">Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Site Web</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="site_web" type="text" class="form-control" id="Phone" value="{{$client->site_web}}">
                      </div>
                    </div>

                    

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Modifier</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>
                @endif

                <div class="tab-pane fade pt-3" id="profile-settings">

                  <!-- Settings Form -->
                 
                </div>


              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
@endSection;