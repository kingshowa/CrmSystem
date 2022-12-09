@extends("layouts.nav-contacts")

@Section("contacts")

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Contact</h1>
      <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{url('contacts')}}">Contacts</a></li>
          <li class="breadcrumb-item active">Add Contact</li>
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
                <div class="tab-pane fade {{ $a1 }} {{ $a }} profile-overview" id="profile-overview">
                  <h5 class="card-title">Contact Details</h5>
   
                  @if($contact != null)

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Surname</div>
                    <div class="col-lg-9 col-md-8">{{$contact->nom}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">First name</div>
                    <div class="col-lg-9 col-md-8">{{$contact->prenom}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Position</div>
                    <div class="col-lg-9 col-md-8">{{$contact->fonction}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone No</div>
                    <div class="col-lg-9 col-md-8">{{$contact->telephone}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8">{{$contact->email}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Company</div>
                    <div class="col-lg-9 col-md-8">{{$contact->client}}</div>
                  </div>
                  
                </div>

                <div class="tab-pane fade {{ $b1 }} {{ $b }} profile-edit pt-3" id="profile-edit">
                  <!-- Profile Edit Form -->
                  
                  <form action="{{url('contact/'.$contact->id)}}" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    {{ csrf_field() }}

                    <div class="row mb-3">
                      <label for="firstName" class="col-md-4 col-lg-3 col-form-label">Surname</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="nom" type="text" class="form-control" id="firstName" value="{{$contact->nom}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="surName" class="col-md-4 col-lg-3 col-form-label">First name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="prenom" type="text" class="form-control" id="surName" value="{{$contact->prenom}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Position</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="fonction" type="text" class="form-control" id="company" value="{{$contact->fonction}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Company</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="client" type="text" class="form-control" id="Job" value="{{$contact->client}}" disabled>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone No</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="telephone" type="text" class="form-control" id="Phone" value="{{$contact->telephone}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="{{$contact->email}}">
                      </div>
                    </div>
                    
                    @endif

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