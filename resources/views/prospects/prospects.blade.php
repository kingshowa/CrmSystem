@extends("layouts.nav-prospects")

@Section("prospects")

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Prospects</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
                  <h5 class="card-title"><a href="prospect-add.html"><button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-plus-circle me-1"></i>Add Prospect</button></a></h5>

                  <table class="table table-striped datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Prospect</th>
                        <th scope="col">Societe</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telephone</th>
                        <th scope="col">Site web</th>
                        <th scope="col">Source</th>
                        <th scope="col">Statut</th>
                        <th scope="col" colspan="2">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">1</a></th>
                        <td>Brandon Jacob</td>
                        <td>Company Name</td>
                        <td>useremail@gmail.com</td>
                        <td>0554107003</td>
                        <td><a href="#" class="text-primary">website.com</a></td>
                        <td>Web</td>
                        <td><span class="badge bg-success">Froid</span></td>
                        <td><a class="collapsed" href="prospect-details.html"><button class="btn btn-light btn-sm"><i class="bi bi-eye-fill"></i></button></a></td>
                        <td><button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#basicModal"><i class="bi bi-trash-fill"></i></button>

                        <div class="modal fade" id="basicModal" tabindex="-1">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Confirm to delete</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              Are you sure that you want to delete Kingstone Showa from the prospects? This action is permanent and can not be undone.
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <a href="pages-blank.html"><button type="button" class="btn btn-primary">Confirm</button></a>
                            </div>
                          </div>
                        </div>
                      </div><!-- End Basic Modal--></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">2</a></th>
                        <td>Bridie Kessler</td>
                        <td>Company Name</td>
                        <td>useremail@gmail.com</td>
                        <td>0554107003</td>
                        <td><a href="#" class="text-primary">website.com</a></td>
                        <td>Partenaire</td>
                        <td><span class="badge bg-success">Froid</span></td>
                        <td><a class="collapsed" href="prospect-details.html"><button class="btn btn-light btn-sm"><i class="bi bi-eye-fill"></i></button></a></td>
                        <td><button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#basicModal"><i class="bi bi-trash-fill"></i></button>

                        <div class="modal fade" id="basicModal" tabindex="-1">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Confirm to delete</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              Are you sure that you want to delete Kingstone Showa from the prospects? This action is permanent and can not be undone.
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <a href="pages-blank.html"><button type="button" class="btn btn-primary">Confirm</button></a>
                            </div>
                          </div>
                        </div>
                      </div><!-- End Basic Modal--></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">3</a></th>
                        <td>Ashleigh Langosh</td>
                        <td>Company Name</td>
                        <td>useremail@gmail.com</td>
                        <td>0554107003</td>
                        <td><a href="#" class="text-primary">website.com</a></td>
                        <td>Web</td>
                        <td><span class="badge bg-success">Froid</span></td>
                        <td><a class="collapsed" href="prospect-details.html"><button class="btn btn-light btn-sm"><i class="bi bi-eye-fill"></i></button></a></td>
                        <td><button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#basicModal"><i class="bi bi-trash-fill"></i></button>

                        <div class="modal fade" id="basicModal" tabindex="-1">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Confirm to delete</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              Are you sure that you want to delete Kingstone Showa from the prospects? This action is permanent and can not be undone.
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <a href="pages-blank.html"><button type="button" class="btn btn-primary">Confirm</button></a>
                            </div>
                          </div>
                        </div>
                      </div><!-- End Basic Modal--></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">4</a></th>
                        <td>Angus Grady</td>
                        <td>Company Name</td>
                        <td>useremail@gmail.com</td>
                        <td>0554107003</td>
                        <td><a href="#" class="text-primar">website.com</a></td>
                        <td>Telephone</td>
                        <td><span class="badge bg-danger">Chaud</span></td>
                        <td><a class="collapsed" href="prospect-details.html"><button class="btn btn-light btn-sm"><i class="bi bi-eye-fill"></i></button></a></td>
                        <td><button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#basicModal"><i class="bi bi-trash-fill"></i></button>

                        <div class="modal fade" id="basicModal" tabindex="-1">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Confirm to delete</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              Are you sure that you want to delete Kingstone Showa from the prospects? This action is permanent and can not be undone.
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <a href="pages-blank.html"><button type="button" class="btn btn-primary">Confirm</button></a>
                            </div>
                          </div>
                        </div>
                      </div><!-- End Basic Modal--></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">5</a></th>
                        <td>Raheem Lehner</td>
                        <td>Company Name</td>
                        <td>useremail@gmail.com</td>
                        <td>0554107003</td>
                        <td><a href="#" class="text-primary">website.com</a></td>
                        <td>Salon</td>
                        <td><span class="badge bg-success">Froid</span></td>
                        <td><a class="collapsed" href="prospect-details.html"><button class="btn btn-light btn-sm"><i class="bi bi-eye-fill"></i></button></a></td>
                        <td><button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#basicModal"><i class="bi bi-trash-fill"></i></button>

                        <div class="modal fade" id="basicModal" tabindex="-1">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Confirm to delete</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              Are you sure that you want to delete Kingstone Showa from the prospects? This action is permanent and can not be undone.
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <a href="pages-blank.html"><button type="button" class="btn btn-primary">Confirm</button></a>
                            </div>
                          </div>
                        </div>
                      </div><!-- End Basic Modal--></td>
                      </tr>
                     
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->



      </div>
    </section>

  </main><!-- End #main -->

@endsection