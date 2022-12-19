@extends("layouts.nav-contacts")

@Section("contacts")

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Contact</h1>
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
            <div class="card-body pt-3 col-xl-8">


              <form action="{{ route('store_contactClient') }}" method="POST">

              <!-- <form action="{{ route('store_contact') }}" method="POST"> -->

              {{ csrf_field()}}


                    <div class="row mb-3">
                      <label for="firstName" class="col-md-4 col-lg-3 col-form-label">Nom</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="nom" type="text" class="form-control" id="firstName" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="surName" class="col-md-4 col-lg-3 col-form-label">Prenom</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="prenom" type="text" class="form-control" id="surName" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Fonction</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="fonction" type="text" class="form-control" id="company" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Job" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Telephone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="telephone" type="text" class="form-control" id="Phone" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Client</label>
                      <div class="col-md-8 col-lg-9">

                        
                        <input  value="{{$societe->societe}}" type="text" class="form-control" id="Email" disabled >
                        <input name="client" value="{{$societe->id}}" type="hidden" class="form-control" id="Email" >
                       

                       

                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Contact</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

            </div>
          </div>

        </div>

      </div>
    </section>

  </main><!-- End #main -->

@endsection