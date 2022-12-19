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
              <button class="nav-link {{ $b }}" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Contact</button>
            </li>

            

          </ul>
          <div class="tab-content pt-2 col-xl-8">

            <div class="tab-pane fade {{ $a }} {{ $a1 }} profile-overview" id="profile-overview">


              <h5 class="card-title">Rendez-Vous Details</h5>
                 @if($rendez !=null)
              <div class="row">
                <div class="col-lg-3 col-md-4 label ">Date</div>
                <div class="col-lg-9 col-md-8">{{$rendez[0]->date}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Heure</div>
                <div class="col-lg-9 col-md-8">{{$rendez[0]->heure}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">compte</div>
                <div class="col-lg-9 col-md-8">{{$rendez[0]->compte}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Client</div>
                <div class="col-lg-9 col-md-8">{{$rendez[0]->client}}</div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-4 label">Commercial</div>
                <div class="col-lg-9 col-md-8">{{$rendez[0]->nom}}</div>
              </div>

             
            </div>

            <div class="tab-pane fade {{ $b }} {{ $b1 }} profile-edit pt-3" id="profile-edit">
            
              <!-- Profile Edit Form -->
              <form action="{{route('update-rendez',$rendez[0]->id)}}" method="POST">

                    <input type="hidden" name="_method" value="PUT" >
                    {{ csrf_field() }}
                   


                <div class="row mb-3">
                  <label for="firstName" class="col-md-4 col-lg-3 col-form-label">Date</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="date" type="date" class="form-control" id="firstName" value="{{$rendez[0]->date}}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="surName" class="col-md-4 col-lg-3 col-form-label">Heure de rendez-vous</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="heure" type="time" class="form-control" id="firstName" value="{{$rendez[0]->heure}}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="company" class="col-md-4 col-lg-3 col-form-label">Compte rondus</label>
                  <div class="col-md-8 col-lg-9">
                    <!--<input name="surName" type="textarea" class="form-control" id="surName" value="Anderson">-->
                    <textarea name="compte" class="form-control" id="about" value="{{$rendez[0]->compte}}" style="height: 100px">{{$rendez[0]->compte}}</textarea>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Job" class="col-md-4 col-lg-3 col-form-label">CLIENT</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="client" type="text" class="form-control" id="Job" value="{{$rendez[0]->client}}" disabled>
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