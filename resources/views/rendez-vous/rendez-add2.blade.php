
@extends("layouts.nav-rendez")

@Section("rendez-vous")

  <main id="main" class="main">

<div class="pagetitle">
  <h1>Add Rendez-Vous</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>

      <li class="breadcrumb-item"><a href="{{url('rendez')}}">rendez-vous</a></li>

      <li class="breadcrumb-item active">Add rendez-vous</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section profile">
  <div class="row">

    <div class="col-xl-12">

      <div class="card"> 
        <div class="card-body pt-3 col-xl-8">

        <form action="{{route('store-rendez2')}}" method="POST">
                 {{csrf_field()}}
                <div class="row mb-3">
                  <label for="firstName" class="col-md-4 col-lg-3 col-form-label">Date</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="date" type="date" class="form-control" id="firstName">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="surName" class="col-md-4 col-lg-3 col-form-label">heur</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="heure" type="time" class="form-control" id="firstName">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="company" class="col-md-4 col-lg-3 col-form-label">Compte Rondus</label>
                  <div class="col-md-8 col-lg-9">
                   <!-- <input name="surName" type="text" class="form-control" id="surName">-->
                   <textarea name="compte" class="form-control" id="about" style="height: 100px">Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Job" class="col-md-4 col-lg-3 col-form-label">Client</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="client"   value="{{$societe->societe}}" type="text" class="form-control" id="Job">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="Job" class="col-md-4 col-lg-3 col-form-label">Commercial</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="commercial" type="text" class="form-control" id="Job">
                  </div>
                </div>
                
                
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Save rendez-vous</button>
                </div>
              </form><!-- End Profile Edit Form -->

        </div>
      </div>

    </div>

  </div>
</section>

</main>
@endSection;