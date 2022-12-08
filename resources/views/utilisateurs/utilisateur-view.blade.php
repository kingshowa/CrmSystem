
@extends("layouts.nav-utilisateurs")

@Section("utilisateurs")
<main id="main" class="main">

<div class="pagetitle">
  <h1>Utilisateurs</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
      <li class="breadcrumb-item active">Utilisateurs</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    
    <!-- Recent Sales -->
        <div class="col-12">
          <div class="card recent-sales overflow-auto">

            

            <div class="card-body">
              <h5 class="card-title"><a href="{{ url('utilisateurs-add')}}"><button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-plus-circle me-1"></i>Add Utilisateurs</button></a></h5>

              <table class="table table-striped datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Email</th>
                    <!--  <th scope="col">Password</th>   -->
                    <th scope="col" colspan="2">Actions</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($utilisateurs as $utilisateur)
                  <tr>
                    <th scope="row"><a href="#"></a></th>
                    <td>{{ $utilisateur->nom }}</td>
                    <td>{{ $utilisateur->prenom }}</td>
                    <td>{{ $utilisateur->email }}</td>
                   
                  
                  
                 <td><a class="collapsed" href=" {{route('edite-ut',$utilisateur->id)}}"><button class="btn btn-light btn-sm"><i class="bi bi-eye-fill"></i></button></a></td>
                 
                 <td>
                  <form action="{{url('utilisateurs/destroy/'.$utilisateur->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#basicModal{{$utilisateur->id}}"><i class="bi bi-trash-fill"></i></button>
                    <div class="modal fade" id="basicModal{{$utilisateur->id}}" tabindex="-1">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Confirm To Delete User</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            Are you sure that you want to delete  {{$utilisateur->nom}} from users? 
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

</main>
  @endsection