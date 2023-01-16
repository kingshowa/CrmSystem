@extends("layouts.nav-contacts")

@Section("contacts")

<main id="main" class="main">

    <div class="pagetitle">
      <h1>View Contact</h1>
      <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{url('contacts')}}">Contacts</a></li>
          <li class="breadcrumb-item active">View Contact</li>
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
   
                 

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Surname</div>
                    <div class="col-lg-9 col-md-8">{{$contact[0]->nom}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">First name</div>
                    <div class="col-lg-9 col-md-8">{{$contact[0]->prenom}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Position</div>
                    <div class="col-lg-9 col-md-8">{{$contact[0]->fonction}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone No</div>
                    <div class="col-lg-9 col-md-8"><a href="tel:{{$contact[0]->telephone}}">{{$contact[0]->telephone}}</a></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><a href="mailto:{{$contact[0]->email}}">{{$contact[0]->email}}</a></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Company</div>
                    <div class="col-lg-9 col-md-8">{{$contact[0]->societe}}</div>
                  </div>
                  
                </div>
                <a href="{{route('createrendez',$contact[0]->id)}}"> <button type="button" class="btn btn-link" style="text-align: left;">planifier un rendez-vous</button></a>


                <div class="tab-pane fade {{ $b1 }} {{ $b }} profile-edit pt-3" id="profile-edit">
                  <!-- Profile Edit Form -->
                  
                  <form action="{{url('contact/'.$contact[0]->id)}}" method="POST">

                    <input type="hidden" name="_method" value="PUT">
                    {{ csrf_field() }}

                    <div class="row mb-3">
                      <label for="firstName" class="col-md-4 col-lg-3 col-form-label">Surname</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="nom" type="text" class="form-control" id="firstName" value="{{$contact[0]->nom}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="surName" class="col-md-4 col-lg-3 col-form-label">First name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="prenom" type="text" class="form-control" id="surName" value="{{$contact[0]->prenom}}">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="surName" class="col-md-4 col-lg-3 col-form-label">Telephone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="telephone" type="text" class="form-control" id="surName" value="{{$contact[0]->telephone}}">
                      </div>
                    </div>


                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Position</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="fonction" type="text" class="form-control" id="company" value="{{$contact[0]->fonction}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Company</label>
                      <div class="col-md-8 col-lg-9">
                       

                        <input name="client" type="text" class="form-control" id="Job" value="{{$contact[0]->societe}}" disabled>
                      </div>
                    </div>

                   

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="{{$contact[0]->email}}">
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
    <section class="section">
      <div class="row">
        
        <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                

                <div class="card-body">

                  <h5 class="card-title"><a href="{{route('createrendez',$contact[0]->id)}}"><button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-plus-circle me-1"></i>Add rendez-vous</button></a></h5>

                 


                  <table class="table table-striped datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Date</th>
                        <th scope="col">Heure</th>
                        <th scope="col">Contact</th>
                        <th scope="col" colspan="2">Actions </th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($rendezs as $rendez)
                      <tr>
                        <th scope="row"><a href="#"></a></th>
                        <td>{{$rendez->date}}</td>
                        <td>{{$rendez->heure}}</td>
                       
                        <td>{{$contact[0]->nom}}</td>
                        
                        

                        <td>
                          <a class="collapsed" href="{{url('rendezView/'.$rendez->id.'/1')}}">
                            <button class="btn btn-light btn-sm"><i class="bi bi-eye-fill"></i></button>
                          </a>
                        </td>
                        <td>
                          <a class="collapsed" href="{{url('rendezView/'.$rendez->id.'/2')}}">
                            <button class="btn btn-light btn-sm"><i class="bi bi-pencil-fill"></i></button>
                          </a>
                        </td>

                       
                      </tr>
                      @endforeach
                   
                    </tbody>
                  </table>

                </div>

              </div>
            </div>

      </div>
    </section>

  </main><!-- End #main -->

@endsection