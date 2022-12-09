
@extends("layouts.nav-contacts")

@Section("contacts")

<main id="main" class="main">
  
    @if(session()->has('succes'))
    <div class="alert alert-success">
      {{session()->get('succes')}}
    </div>
    @endif

    <div class="pagetitle">
      <h1>Contacts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('admin')}}">Home</a></li>
          <li class="breadcrumb-item active">Contacts</li>
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
                    <a href="{{ url('contact-add')}}">
                      <button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-plus-circle me-1"></i>Add Contact</button>
                    </a>
                  </h5>

                  <table class="table table-striped datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Fonction</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telephone</th>
                        <th scope="col">Client</th>
                        <th scope="col" colspan="3">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($contacts as $contact)
                      <tr>
                        <th scope="row"><a href="#">{{$contact->id}}</a></th>
                        <td>{{$contact->prenom}} {{$contact->nom}}</td>
                        <td>{{$contact->fonction}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->telephone}}</td>
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
                        <td>
                          <form action="{{url('contacts/'.$contact->id)}}" method="POST">
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
                                  Are you sure that you want to delete {{$contact->prenom}} {{$contact->nom}} from contacts? This action is permanent and can not be undone.
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