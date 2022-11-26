@extends("layouts.nav-clients")

@Section("clients")




  <main id="main" class="main">
 

    <div class="pagetitle">
      <h1>Add Client</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{url('clients')}}">Clients</a></li>
          <li class="breadcrumb-item active">Add Client</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">

        <div class="col-xl-12">

          <div class="card"> 
            <div class="card-body pt-3 col-xl-8">

              <form action="{{route('store')}}" method="POST">
                 {{csrf_field()}}
  
                    <div class="row mb-3 @if($errors->get('societe')) has-error @endif">
                      <label for="firstName" class="col-md-4 col-lg-3 col-form-label">Societe</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="societe"  value="{{old('societe')}}"type="text" class="form-control" id="firstName">
                        @if($errors->get('societe'))
                    @foreach($errors->get('societe') as $message)
                       {{$message}}
                    @endforeach
                 @endif
                      </div>
                    </div>

                    <div class="row mb-3  @if($errors->get('telephone')) has-error @endif">
                      <label for="surName" class="col-md-4 col-lg-3 col-form-label">Telephone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="telephone"  value="{{old('telephone')}}" type="text" class="form-control" id="surName">
                        @if($errors->get('telephone'))
                    @foreach($errors->get('telephone') as $message)
                       {{$message}}
                    @endforeach
                 @endif
                      </div>
                    </div>


                    <div class="row mb-3  @if($errors->get('adresse')) has-error @endif">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="adresse" class="form-control" id="about" style="height: 100px"> {{old('adresse')}}</textarea>
                        @if($errors->get('adresse'))
                    @foreach($errors->get('adresse') as $message)
                       {{$message}}
                    @endforeach
                 @endif
                      </div>
                    </div>

                    <div class="row mb-3 @if($errors->get('site_web')) has-error @endif">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">site</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="site_web"  value="{{old('site_web')}}"type="email" class="form-control" id="Phone">
                        @if($errors->get('site_web'))
                    @foreach($errors->get('site_web') as $message)
                       {{$message}}
                    @endforeach
                 @endif
                      </div>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Client</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

            </div>
          </div>

        </div>

      </div>
    </section>

  </main><!-- End #main -->

@endsection;