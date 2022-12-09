
@extends("layouts.nav-utilisateurs")

@Section("utilisateurs")

<main id="main" class="main">

<div class="pagetitle">
  <h1>Utilisateurs</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
      <li class="breadcrumb-item"><a href="{{url('/utilisateurs')}}">Utilisateurs</a></li>
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
              <button class="nav-link {{ $b }}" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Utilisateurs</button>
            </li>

           
            </li>

          </ul>
          <div class="tab-content pt-2 col-xl-8">

            <div class="tab-pane fade {{ $a }} {{ $a1 }} profile-overview" id="profile-overview">


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

            </div>

            <div class="tab-pane fade {{ $b }} {{ $b1 }} profile-edit pt-3" id="profile-edit">

              <!-- Profile Edit Form -->
              <form action="{{url('utilisateurs/update',$utilisateur->id)}}" method="POST">
              <input type="hidden" name="_method" value="PUT" >
              {{ csrf_field() }}
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



          </div><!-- End Bordered Tabs -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->
  @endsection