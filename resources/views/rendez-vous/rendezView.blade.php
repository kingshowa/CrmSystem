@extends("layouts.nav-rendez")

@Section("rendez-vous")

  <main id="main" class="main">

<div class="pagetitle">
  <h1>rendez-vous details</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
      <li class="breadcrumb-item"><a href="{{url('rendez')}}">rendez-vous</a></li>
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
              <a><button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button></a>
            </li>

            <li class="nav-item">
             <a href="{{url('rendez/edite'.$rendez->id)}}"> <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Contact</button></a>
            </li>

            

          </ul>
          <div class="tab-content pt-2 col-xl-8">

            <div class="tab-pane fade show active profile-overview" id="profile-overview">


              <h5 class="card-title">Rendez-Vous Details</h5>

              <div class="row">
                <div class="col-lg-3 col-md-4 label ">Date</div>
                <div class="col-lg-9 col-md-8">{{$rendez->date}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Compte Rendu</div>
                <div class="col-lg-9 col-md-8">{{$rendez->compte}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Client</div>
                <div class="col-lg-9 col-md-8">{{$rendez->client}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Commercial</div>
                <div class="col-lg-9 col-md-8">{{$rendez->Commercial}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">durée de la rendez-vous</div>
                <div class="col-lg-9 col-md-8">{{$rendez->duree}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Email Contact</div>
                <div class="col-lg-9 col-md-8">{{$rendez->email}}</div>
              </div>

            </div>

            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

              <!-- Profile Edit Form -->
              <form>

                <div class="row mb-3">
                  <label for="firstName" class="col-md-4 col-lg-3 col-form-label">Date</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="firstName" type="date" class="form-control" id="firstName" value="{{$rendez->date}}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="surName" class="col-md-4 col-lg-3 col-form-label">Compte rendu</label>
                  <div class="col-md-8 col-lg-9">
                    <!--<input name="surName" type="textarea" class="form-control" id="surName" value="Anderson">-->
                    <textarea name="surName" class="form-control" id="about" style="height: 100px">Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="company" class="col-md-4 col-lg-3 col-form-label">Client</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="company" type="text" class="form-control" id="company" value="Lueilwitz, Wisoky and Leuschke">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Job" class="col-md-4 col-lg-3 col-form-label">Commercial</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="job" type="text" class="form-control" id="Job" value="Web Designer">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="about" class="col-md-4 col-lg-3 col-form-label">durée de rendz-vous</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="surName" type="textarea" class="form-control" id="surName" value="Anderson">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="phone" type="text" class="form-control" id="Phone" value="(436) 486-3538 x29071">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="email" type="email" class="form-control" id="Email" value="k.anderson@example.com">
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
              </form><!-- End Profile Edit Form -->

            </div>

            


          </div><!-- End Bordered Tabs -->

        </div>
      </div>

    </div>
  </div>
</section>

</main>
@endsection;