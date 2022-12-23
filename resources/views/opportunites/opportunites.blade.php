@extends("layouts.nav-opportunities")

@Section("opportunites")
<style>
  a{color:white;}
</style>

<main id="main" class="main">

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
                  <h5 class="card-title"><a href="{{url('opportunites-add')}}"><button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-plus-circle me-1"></i>Add Opportunite</button></a></h5>

                  <table class="table table-striped datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Date_cloture</th>
                        <th scope="col">Client</th>
                        <th scope="col">Etape</th>
                        <th scope="col" colspan="3">Actions</th>
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
                        <td>
                        @if($opportunite->etape == 'Prospection' || $opportunite->etape == 'Verification' || $opportunite->etape == 'Proposition')
                             <button type="button" class="btn btn-md btn-success">Devis  </button> 
                          @endif
                          @if($opportunite->etape == 'Gangee')
                             <button type="button" class="btn btn-danger" ><a href="{{url('opportunites/factures')}}">Facture</a></button>
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