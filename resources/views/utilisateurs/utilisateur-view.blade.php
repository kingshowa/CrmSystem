
@extends("layouts.nav-utilisateurs")

@Section("utilisateurs")
<main id="main" class="main">

<div class="pagetitle">
  <h1>Utilisateurs</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
                    <td>{{$utilisateur->nom}}</td>
                    <td>{{$utilisateur->prenom}}</td>
                    <td>{{$utilisateur->email}}</td>
                    <!--<td>{{$utilisateur->password}}</td>-->
                   
                    <td><a class="collapsed" href="{{route('edite',$utilisateur->id)}}"><button class="btn btn-light btn-sm"><i class="bi bi-eye-fill"></i></button></a></td>
                    <td><button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#basicModal"><i class="bi bi-trash-fill"></i></button>

                    <div class="modal fade" id="basicModal" tabindex="-1">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Confirm To Delete Contact</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Are you sure that you want to delete Kingstone Showa from contacts? This action is permanent and can not be undone.
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

            </div>

          </div>
        </div><!-- End Recent Sales -->



  </div>
</section>

</main>
  @endsection