@extends("layouts.nav-clients")

@Section("clients")

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Client</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{url('clients')}}">Client</a></li>
          <li class="breadcrumb-item active">View Client</li>
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
                 <a href="#" > <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button></a>
                </li>

                <li class="nav-item">
                  <a href="#"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Client</button></a>
                </li>


              </ul>
              <div class="tab-content pt-2 col-xl-8">
                @if($client != null)
                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                

                  <h5 class="card-title">Client Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nom societe</div>
                    <div class="col-lg-9 col-md-8">{{$client->societe}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-8">{{$client->adresse}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8">{{$client->telephone}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Site Web</div>
                    <div class="col-lg-9 col-md-8">{{$client->site_web}}</div>

                   </div>
                  


                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form action="{{url('client/update',$client->id)}}" method="POST">

                    <input type="hidden" name="_method" value="PUT" >
                    {{ csrf_field() }}

                    <div class="row mb-3">
                      <label for="firstName" class="col-md-4 col-lg-3 col-form-label">Societe</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="societe" type="text" class="form-control" id="firstName" value="{{$client->societe}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="surName" class="col-md-4 col-lg-3 col-form-label">Telephone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="telephone" type="text" class="form-control" id="surName" value="{{$client->telephone}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="adresse" class="form-control" id="about"value="{{$client->adresse}}" style="height: 100px">Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Site Web</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="site_web" type="text" class="form-control" id="Phone" value="{{$client->site_web}}">
                      </div>
                    </div>

                    

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Modifier</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>
                

                <div class="tab-pane fade pt-3" id="profile-settings">

                  <!-- Settings Form -->
                 
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
                  <h5 class="card-title">
                    <a href="{{ url('contact-add2/'.$client->id)}}">
                      <button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-plus-circle me-1"></i>Add Contact</button>
                    </a>
                  </h5>

                  <table class="table table-striped datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Fonction</th>
                        <th scope="col">Client</th>
                        <th scope="col" colspan="2">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($contacts as $contact)
                      <tr>
                        <th scope="row"><a href="#"></a></th>
                        <td>{{$contact->nom}} {{$contact->prenom}}</td>
                        <td>{{$contact->fonction}}</td>                     
                        <td>{{$contact->client}}</td>
                        <td>
                          <a class="collapsed" href="{{url('contact/'.$contact->id)}}">
                            <button class="btn btn-light btn-sm"><i class="bi bi-eye-fill"></i></button>
                          </a>
                        </td>
                       </tr>
                      @endforeach
            
                     
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->
      </div>
    </section>

    <section class="section">
      <div class="row">
        
        <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                

                <div class="card-body">

                  <h5 class="card-title"><a href="{{url('rendez/create')}}"><button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-plus-circle me-1"></i>Add rendez-vous</button></a></h5>

                 


                  <table class="table table-striped datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Date</th>
                        <th scope="col">Client</th>
                        <th scope="col">Commercial</th>
                        <th scope="col" colspan="2">Actions </th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($rendezs as $rendez)
                      <tr>
                        <th scope="row"><a href="#"></a></th>
                        <td>{{$rendez->date}}</td>
                        <td>{{$rendez->client}}</td>
                        <td>{{$rendez->commercial}}</td>
                        
                        

                        <td><a class="collapsed" href="{{route('show2',$rendez->id)}}"><button class="btn btn-light btn-sm"><i class="bi bi-eye-fill"></i></button></a></td>

                       

                       
                      
                      </tr>
                      @endforeach
                      
                       
                       
                     
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->



      </div>
    </section>
    @endif

  </main><!-- End #main -->
  
@endSection;