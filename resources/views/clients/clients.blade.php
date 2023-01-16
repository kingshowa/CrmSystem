@extends("layouts.nav-clients")

@Section("clients")


  <main id="main" class="main">
  
    @if(session()->has('succes'))
      <div class="alert alert-success">
        {{session()->get('succes')}}
      </div>
    @endif
    @if(session()->has('restore'))
      <div class="alert alert-success">
        {{session()->get('restore')}}
      </div>
    @endif
    @if(session()->has('delete'))
      <div class="alert alert-success">
        {{session()->get('delete')}}
      </div>
    @endif

    <div class="pagetitle">
      <h1>Clients</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active">Clients</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <style>
      .lefted{
        float: right;
      }
    </style>

    <section class="section">
      <div class="row">
        
        <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">    

                <div class="card-body">

                  <h5 class="card-title"><a href="{{url('client-add')}}"><button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-plus-circle me-1"></i>Add Client</button></a>

                    @if(request()->has('deleted'))
                    <a href="{{route('indexclient')}}"><button type="button" class="btn btn-secondary btn-sm">View all</button></a>
                    <a href="{{route('restore-all')}}" class="lefted"><button type="button" class="btn btn-success btn-sm">Restore all</button></a></h5>
                    @else
                    <a href="{{route('indexclient',['deleted'=>'deleted'])}}" class="lefted">
                      <button type="button" class="btn btn-warning btn-sm"><i class="bi bi-trash-fill"></i> Trashed Client</button>
                    </a>
                  </h5>
                    @endif
                  <table class="table table-striped datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Client</th>
                        <th scope="col">Telephone</th>
                        <th scope="col">Site Web</th>
                        @if(request()->has('deleted'))
                        <th scope="col">Deleted at</th>
                        <th scope="col" colspan="1">Actions </th>
                        @else
                        <th scope="col" colspan="3">Actions </th>
                        @endif
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($clients as $client)
                      <tr>

                        <th scope="row"><a href="#">{{$client->id}}</a></th>
                        <td>{{ $client->societe }}</td>
                        <td>{{$client->telephone}}</td>
                        <td><a href="https://{{$client->site_web}}">{{$client->site_web}}</a></td>
                  
                        @if(request()->has('deleted'))
                        <td>{{$client->deleted_at}}</td>
                        <td>
                            <a href="{{url('client/restore/'.$client->id)}}">
                              <span class="badge bg-success">Restore</span>
                            </a>
                        </td>
                        @else
                        <td>
                          <a class="collapsed" href="{{ url('clientView/'.$client->id.'/1')}}">
                            <button class="btn btn-light btn-sm"><i class="bi bi-eye-fill"></i></button>
                          </a>
                        </td>
                        <td>
                          <a class="collapsed" href="{{url('clientView/'.$client->id.'/2')}}">
                            <button class="btn btn-light btn-sm"><i class="bi bi-pencil-fill"></i></button>
                          </a>
                        </td>

                        <td>
                          
                          <form action="{{url('client/destroy/'.$client->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#basicModal{{$client->id}}"><i class="bi bi-trash-fill"></i></button>
                          
                          

                          <div class="modal fade" id="basicModal{{$client->id}}" tabindex="-1">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Confirm To Delete Contact</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  Are you sure that you want to delete  {{$client->societe}} from clients? You can restore this client later.
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

  </main>
  @endSection;