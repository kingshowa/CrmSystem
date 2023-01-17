
@extends("layouts.nav-rendez")

@Section("rendez-vous")

  <main id="main" class="main">

<div class="pagetitle">
<h1>Add Appointment</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>

      <li class="breadcrumb-item"><a href="{{url('rendez')}}">Appointments</a></li>

      <li class="breadcrumb-item active">Add Appointment</li>
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
                  <label for="surName" class="col-md-4 col-lg-3 col-form-label">Time</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="heure" type="time" class="form-control" id="firstName">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="company" class="col-md-4 col-lg-3 col-form-label">Purpose</label>
                  <div class="col-md-8 col-lg-9">
                   <!-- <input name="surName" type="text" class="form-control" id="surName">-->
                   <textarea name="compte" class="form-control" id="about" style="height: 60px"></textarea>
                  </div>
                </div>

                <div class="row mb-3  @if($errors->get('client')) has-error @endif">
                  <label for="Job" class="col-md-4 col-lg-3 col-form-label">Contact</label>
                  <div class="col-md-8 col-lg-9">
                  <select class="form-select" id="select_box" name="contactID">
                          <option selected>Choose Contact</option>
                          @foreach($contacts as $contact)
                          <option value="{{$contact->id}}">{{$contact->nom}}</option>
                          @endforeach
                        </select>
                    
                    @if($errors->get('client'))
                    @foreach($errors->get('client') as $message)
                       {{$message}}
                    @endforeach
                 @endif
                  </div>
                </div>

                <div class="row mb-3  ">
                  <label  class="col-md-4 col-lg-3 col-form-label"></label>
                  <div class="col-md-8 col-lg-9">
                    <button type="submit" class="btn btn-primary">Save Appointment</button>
                  </div>
                </div>
              </form><!-- End Profile Edit Form -->

        </div>
      </div>

    </div>

  </div>
</section>

</main>
@endSection;