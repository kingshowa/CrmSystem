@extends("layouts.nav-utilisateurs")

@Section("utilisateurs")

<main id="main" class="main">

<div class="pagetitle">
  <h1>Add Utilisateurs</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('admin')}}">Home</a></li>
      <li class="breadcrumb-item"><a href="utilisateurs-view">Utilisateurs</a></li>
      <li class="breadcrumb-item active">Add Utilisateurs</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section profile">
  <div class="row">

    <div class="col-xl-12">

      <div class="card"> 
        <div class="card-body pt-3 col-xl-8">

        <form action="{{url('utilisateurs/store')}}" method="POST">
              {{ csrf_field()}}  
                <div class="row mb-3">
                  <label for="firstName" class="col-md-4 col-lg-3 col-form-label">First Name</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="firstName" type="text" class="form-control" id="firstName">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="surName" class="col-md-4 col-lg-3 col-form-label">Surname</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="surName" type="text" class="form-control" id="surName">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="email" type="email" class="form-control" id="Email">
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Save Utilisateurs</button>
                </div>
              </form><!-- End Profile Edit Form -->

        </div>
      </div>

    </div>

  </div>
</section>




</main><!-- End #main -->

@endsection