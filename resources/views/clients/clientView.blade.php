@extends("layouts.nav-clients")

@Section("clients")

  <main id="main" class="main">
  @if(session()->has('succes'))
    <div class="alert alert-success">
      {{session()->get('succes')}}
    </div>
    @endif
    @if(session()->has('bien'))
    <div class="alert alert-success">
      {{session()->get('bien')}}
    </div>
    @endif

    <div class="pagetitle">
      <h1>View Client</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{url('clients')}}">Clients</a></li>
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
                  <button class="nav-link {{ $b }}" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Client</button>
                </li>


              </ul>
              <div class="tab-content pt-2 col-xl-8">
                @if($client != null)
                <div class="tab-pane fade {{ $a }} {{ $a1 }} profile-overview" id="profile-overview">
                

                  <h5 class="card-title">Client Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Company</div>
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
                    <div class="col-lg-3 col-md-4 label">Website</div>
                    <div class="col-lg-9 col-md-8"><a href="https://{{$client->site_web}}">{{$client->site_web}}</a></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Logo</div>
                    <div class="col-lg-9 col-md-8"><img src="/storage/imag/{{$client->logo}}" height="50" alt=""></div>
                  </div>
                  
                </div>

                <div class="tab-pane fade {{ $b }} {{ $b1 }} profile-edit pt-3" id="profile-edit">
                 

                  <!-- Profile Edit Form -->
                  <form action="{{url('client/update/'.$client->id)}}" method="POST">       

                    <input type="hidden" name="_method" value="PUT" >
                    {{ csrf_field() }}

                    <div class="row mb-3">
                      <label for="firstName" class="col-md-4 col-lg-3 col-form-label">Company</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="societe" type="text" class="form-control" id="firstName" value="{{$client->societe}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="surName" class="col-md-4 col-lg-3 col-form-label">Phone No</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="telephone" type="text" class="form-control" id="surName" value="{{$client->telephone}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="adresse" class="form-control" id="about"value="{{$client->adresse}}" style="height: 50px">{{$client->adresse}}</textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Website</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="site_web" type="text" class="form-control" id="Phone" value="{{$client->site_web}}">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label"></label>
                      <div class="col-md-8 col-lg-9">
                      <button type="submit" class="btn btn-primary">Save</button>
                      </div>
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
                        <th scope="col" colspan="2">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($contacts as $contact)
                      <tr>
                        <th scope="row"><a href="#">{{$contact->id}}</a></th>
                        <td>{{$contact->nom}} {{$contact->prenom}}</td>
                        <td>{{$contact->fonction}}</td>                     
                        <td>{{$contact->client}}</td>
                        <td>
                          <a class="collapsed" href="{{url('contact/'.$contact->id.'/1')}}">
                            <button class="btn btn-light btn-sm"><i class="bi bi-eye-fill"></i></button>
                          </a>
                        </td>
                        <td>
                          <a class="collapsed" href="{{url('contact/'.$contact->id.'/2')}}">
                            <button class="btn btn-light btn-sm"><i class="bi bi-pencil-fill"></i></button>
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

                  <h5 class="card-title"><a href="{{ url('rendez/creater/'.$client->id)}}"><button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-plus-circle me-1"></i>Add rendez-vous</button></a></h5>

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
                        <th scope="row"><a href="#">{{$rendez->id}}</a></th>
                        <td>{{$rendez->date}}</td>
                        <td>{{$rendez->client}}</td>
                        <td>{{$rendez->nom}}</td>
                        
                        

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
            </div><!-- End Recent Sales -->



      </div>
    </section>
    <section class="section">
      <div class="row">
        
        <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                

                <div class="card-body">
                  <h5 class="card-title"><a href="{{route('oppcreate',$client->id)}}"><button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-plus-circle me-1"></i>Add Opportunite</button></a></h5>

                  <table class="table table-striped datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Opportunity</th>
                        <th scope="col">Clossing date</th>
                        <th scope="col">Company</th>
                        <th scope="col">Stage</th>
                        @if(request()->has('deleted'))
                        <th scope="col">Deleted at</th>
                        <th scope="col" colspan="1">Actions </th>
                        @else
                        <th scope="col" colspan="3">Actions </th>
                        @endif
                      </tr>
                    </thead>
                    <tbody>

                    @foreach($opp as $opportunite)
                      <tr>
                        <th scope="row"><a href="#">{{$opportunite->id}}</a></th>
                        <td>{{$opportunite->nom}}</td>
                        <td>{{$opportunite->date_cloture}}</td>
                        <td>{{$opportunite->client}}</td>
                        <td>{{$opportunite->etape}}</td>

                        @if(request()->has('deleted'))
                        <td>{{$opportunite->deleted_at}}</td>
                        <td>
                            <a href="{{url('opportunites-restore/'.$opportunite->id)}}">
                              <span class="badge bg-success">Restore</span>
                            </a>
                        </td>
                        @else

                        <td>
                        @if($opportunite->etape != 'Gangee')

                        <a href="{{route('devisdownload',$opportunite->id)}}">Devis </a> 
                        @endif
        

                        @if($opportunite->etape == 'Gangee')
                          <a href="{{route('facturedownload',$opportunite->id)}}">Facture</a>

                        @endif

                        </td>

                        
                        <td>
                          <a class="collapsed" href="{{url('opportunite/'.$opportunite->id.'/1')}}">
                            <button class="btn btn-light btn-sm"><i class="bi bi-eye-fill"></i></button>
                          </a>
                        </td>
                        <td>
                          <a class="collapsed" href="{{url('opportunite/'.$opportunite->id.'/2')}}">
                            <button class="btn btn-light btn-sm"><i class="bi bi-pencil-fill"></i></button>
                          </a>
                        </td>

                        <td>
                          <a class="collapsed" href="{{url('opportunite/'.$opportunite->id.'/3')}}">
                            <button class="btn btn-light btn-sm"><i class="bi bi-file-earmark-ruled-fill"></i></button>
                          </a>
                        </td>
                        <td>
                          <form action="{{url('opportunites/'.$opportunite->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#basicModal{{$opportunite->id}}"><i class="bi bi-trash-fill"></i></button>
                          
                      
                          <div class="modal fade" id="basicModal{{$opportunite->id}}" tabindex="-1">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Confirm To Delete Opportunite</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  Are you sure that you want to delete {{$opportunite->prenom}} {{$opportunite->nom}} from opportunites? This action is permanent and can not be undone.
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Confirm</button>
                                </div>
                              </div>
                            </div>
                          </div><!-- End Basic Modal-->
                          </form>
                        </td>
                        @endif
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