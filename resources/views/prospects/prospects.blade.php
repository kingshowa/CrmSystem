@extends("layouts.nav-prospects")

@Section("prospects")


<main id="main" class="main">

    <div class="pagetitle">
      <h1>Prospects</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('admin')}}">Home</a></li>
          <li class="breadcrumb-item active">Prospects</li>
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
                    <a href="{{url('prospect-add')}}">
                      <button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-plus-circle me-1"></i>Add Prospect</button>
                    </a>
                  </h5>

                  <table class="table table-striped datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Prospect</th>
                        <th scope="col">Societe</th>
                        <th scope="col">Telephone</th>
                        <th scope="col">Email</th>
                        <th scope="col" >Site web</th>
                        <th scope="col">Source</th>
                        <th scope="col">Statut</th>
                        <th scope="col" colspan="2">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    
                    @foreach($prospects as $prospect)
                      <tr>
                        <th scope="row"><a href="#">{{$prospect->id}}</a></th>
                        <td>{{$prospect->nom}}
                        {{$prospect->prenom}}</td>
                        <td>{{$prospect->societe}}</td>
                        <td>{{$prospect->telephone}}</td>
                        <td>{{$prospect->email}}</td>
                        <td class="text-primary">{{$prospect->site_web}}</td>
                        <td>{{$prospect->source}}</td>
                        <td><span class="badge bg-success">{{$prospect->statut}}</span></td>
                        <td>
                          <a class="collapsed" href="{{url('prospect/'.$prospect->id)}}">
                            <button class="btn btn-light btn-sm"><i class="bi bi-eye-fill"></i></button>
                          </a>
                        </td>
                        <td>
                          <form action="{{url('prospects/'.$prospect->id)}}" method="POST">
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
                                  Are you sure that you want to delete {{$prospect->prenom}} {{$prospect->nom}} from prospects? This action is permanent and can not be undone.
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

                </div>

              </div>
            </div><!-- End Recent Sales -->



      </div>
    </section>

  </main><!-- End #main -->


@endsection