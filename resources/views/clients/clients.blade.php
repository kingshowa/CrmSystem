@extends("layouts.nav-clients")

@Section("clients")


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Clients</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active">Clients</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        
        <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                

                <div class="card-body">

                  <h5 class="card-title"><a href="{{url('client-add')}}"><button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-plus-circle me-1"></i>Add Client</button></a></h5>


                  <table class="table table-striped datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Client</th>
                        <th scope="col">Telephone</th>
                        <th scope="col">Site Web</th>
                        <th scope="col" colspan="2">Actions </th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($clients as $client)
                      <tr>

                        <th scope="row"><a href="#">{{$client->id}}</a></th>
<<<<<<< HEAD
                        <td>{{ $client->societe }}  </td>
                        <td>{{$client->telephone}}  </td>
                        <td>{{$client->created_at}}  </td>
                        <td><a class="collapsed" href="{{url('clientView'.$client->$id)}}"><button class="btn btn-light btn-sm"><i class="bi bi-eye-fill"></i></button></a></td>


                           <td><button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#basicModal"><i class="bi bi-trash-fill"></i></button>
=======
                        <td>{{ $client->societe }}</td>
                        <td>{{$client->telephone}}</td>
                        <td>{{$client->site_web}}</td>
                        <td><a class="collapsed" href="{{route('show',$client->id)}}"><button class="btn btn-light btn-sm"><i class="bi bi-eye-fill"></i></button></a></td>
>>>>>>> fe986e3e61fa7d47486eff6e938baba2eb5e9484

                        <td><button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#basicModal"><i class="bi bi-trash-fill"></i></button></td>


                        <div class="modal fade" id="basicModal" tabindex="-1">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Confirm To Delete Contact</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              Are you sure that you want to delete {{url('client->societe')}} from listes clients? This action is permanent and can not be undone.
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <a href="pages-blank.html"><button type="button" class="btn btn-primary">Confirm</button></a>
                            </div>
                          </div>
                        </div>
                      </div><!-- End Basic Modal--></td>
                      </tr>
                      @endforeach
                     
                    </tbody>
                    
                  </table>
                 <a href="{{url('client/create')}}"> <button type="button" class="btn btn-link" style="text-align: left;">planifier un rendez-vous</button></a>
                </div>

              </div>
            </div><!-- End Recent Sales -->
            



      </div>
    </section>

  </main>
  @endSection;