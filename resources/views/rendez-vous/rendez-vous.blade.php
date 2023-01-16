@extends("layouts.nav-rendez")

@Section("rendez-vous")
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
      <h1>Appointments</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active">Appointments</li>
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

                  <h5 class="card-title">
                    <a href="{{url('rendez/create')}}"><button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-plus-circle me-1"></i>Add Appointment</button>
                  </a>
                  @if(request()->has('deleted'))
                    <a href="{{route('index-rendez')}}"><button type="button" class="btn btn-secondary btn-sm">View all</button></a>
                    <a href="{{route('rendez-all')}}" class="lefted"><button type="button" class="btn btn-success btn-sm">Restore all</button></a></h5>
                    @else
                    <a href="{{route('index-rendez',['deleted'=>'deleted'])}}" class="lefted">
                      <button type="button" class="btn btn-warning btn-sm"><i class="bi bi-trash-fill"></i> Trashed Appointment</button>
                    </a>
                  </h5>
                    @endif</h5>

                 


                  <table class="table table-striped datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Contact</th>
                        @if(request()->has('deleted'))
                        <th scope="col">Deleted at</th>
                        <th scope="col" colspan="1">Actions </th>
                        @else
                        <th scope="col" colspan="3">Actions </th>
                        @endif
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($rendez as $rendez)
                      <tr>
                        <th scope="row"><a href="#">{{$rendez->id}}</a></th>
                        <td>{{$rendez->date}}</td>
                        <td>{{$rendez->heure}}</td>
                        <td>{{$rendez->nom}}</td>
                        @if(request()->has('deleted'))
                        <td>{{$client->deleted_at}}</td>
                        <td>
                            <a href="{{route('rendez-restore',$rendez->id)}}">
                              <span class="badge bg-success">Restore</span>
                            </a>
                        </td>
                        @else
                        
                        

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
                        <td>
                          <form action="{{url('rendez/destroy/'.$rendez->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#basicModal"><i class="bi bi-trash-fill"></i></button>
                          
                          

                          <div class="modal fade" id="basicModal" tabindex="-1">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Confirm To Delete Contact</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  Are you sure that you want to delete {{$rendez->id}}  from contacts? 
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
@endsection;