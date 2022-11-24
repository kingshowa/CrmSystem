@extends("layouts.nav-rendez")

@Section("rendez-vous")

  <main id="main" class="main">

<div class="pagetitle">
  <h1>rendez-vous details</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>

      <li class="breadcrumb-item"><a href="{{url('rendez')}}">rendez-vous</a></li>

      <li class="breadcrumb-item"><a href="{{url('rendez-vous')}}">rendez-vous</a></li>

      <li class="breadcrumb-item active"></li>
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
              <a href="#"><button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button></a>
            </li>

            <li class="nav-item">
             <a href="#"> <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Contact</button></a>
            </li>

            

          </ul>
          <div class="tab-content pt-2 col-xl-8">

            <div class="tab-pane fade show active profile-overview" id="profile-overview">


              <h5 class="card-title">Rendez-Vous Details</h5>
                 @if($rendez !=null)
              <div class="row">
                <div class="col-lg-3 col-md-4 label ">Date</div>
                <div class="col-lg-9 col-md-8">{{$rendez->date}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Heure</div>
                <div class="col-lg-9 col-md-8">{{$rendez->heure}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">compte</div>
                <div class="col-lg-9 col-md-8">{{$rendez->compte}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Client</div>
                <div class="col-lg-9 col-md-8">{{$rendez->client}}</div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-4 label">Commercial</div>
                <div class="col-lg-9 col-md-8">{{$rendez->commercial}}</div>
              </div>

             
            </div>

            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

              <!-- Profile Edit Form -->
              <form action="{{url('rendez/update',$rendez->id)}}" method="POST">

                    <input type="hidden" name="_method" value="PUT" >
                    {{ csrf_field() }}


                <div class="row mb-3">
                  <label for="firstName" class="col-md-4 col-lg-3 col-form-label">Date</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="date" type="date" class="form-control" id="firstName" value="{{$rendez->date}}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="surName" class="col-md-4 col-lg-3 col-form-label">Heure de rendez-vous</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="heure" type="time" class="form-control" id="firstName" value="{{$rendez->heure}}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="company" class="col-md-4 col-lg-3 col-form-label">Compte rondus</label>
                  <div class="col-md-8 col-lg-9">
                    <!--<input name="surName" type="textarea" class="form-control" id="surName" value="Anderson">-->
                    <textarea name="compte" class="form-control" id="about" value="{{$rendez->compte}}" style="height: 100px">Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Job" class="col-md-4 col-lg-3 col-form-label">CLIENT</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="client" type="text" class="form-control" id="Job" value="{{$rendez->client}}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="about" class="col-md-4 col-lg-3 col-form-label">Commercial</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="commercial" type="textarea" class="form-control" id="surName" value="{{$rendez->commercial}}">
                  </div>
                </div>

               

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
                
              </form><!-- End Profile Edit Form -->

            </div>
            @endif

            


          </div><!-- End Bordered Tabs -->

        </div>
      </div>

    </div>
  </div>
</section>

</main>
@endsection;