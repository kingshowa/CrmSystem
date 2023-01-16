@extends("layouts.nav-opportunities")

@Section("opportunites")
<style>
      .lefted{
        float: right;
      }
    </style>

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
      <h1>Opportunites</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('admin')}}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ url('commerciale')}}">Home</a></li>
          <li class="breadcrumb-item active">Opportunites</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        
        <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                

                <div class="card-body">
                  <h5 class="card-title">
                    <a href="{{url('opportunites-add')}}">
                      <button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-plus-circle me-1"></i>Add Opportunity</button>
                    </a>
                    @if(request()->has('deleted'))
                    <a href="{{route('indexopp')}}"><button type="button" class="btn btn-secondary btn-sm">View all</button></a>
                    <a href="{{route('restore-allopp')}}" class="lefted"><button type="button" class="btn btn-success btn-sm">Restore all</button></a></h5>
                    @else
                    <a href="{{route('indexopp',['deleted'=>'deleted'])}}" class="lefted">
                      <button type="button" class="btn btn-warning btn-sm"><i class="bi bi-trash-fill"></i> Trashed Opportunite</button>
                    </a>
                  </h5>
                    @endif
                  </h5>

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

                    @foreach($opportunites as $opportunite)
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
                 <a href="rendez_add .html"> <button type="button" class="btn btn-link" style="text-align: left;">planifier un rendez-vous</button></a>
                </div>

              </div>
            </div><!-- End Recent Sales -->
            



      </div>
    </section>

  </main><!-- End #main -->

  @endsection