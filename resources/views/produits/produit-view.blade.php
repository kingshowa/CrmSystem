
@extends("layouts.nav-produits")

@Section("produits")

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Produits</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Produits</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        
        <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                

                <div class="card-body">
                  <h5 class="card-title"><a href="produits-add.html"><button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-plus-circle me-1"></i>Add Produits</button></a></h5>

                  <table class="table table-striped datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Quantites</th>
                        <th scope="col">Photo</th>
                        <th scope="col" colspan="2">Description</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">1</a></th>
                        <td>Mercedes 190</td>
                        <td>2400 euros</td>
                        <td>10</td>
                        <td><img src="Mercedes-Benz_190_front_20081213.jpg" width="60px" height="60px"></td>
                        <td><a class="collapsed" href="produits-details.html"><button class="btn btn-light btn-sm"><i class="bi bi-eye-fill"></i></button></a></td>
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
                      <tr>
                        <th scope="row"><a href="#">2</a></th>
                        <td>Audi Q5</td>
                        <td>3000 euros</td>
                        <td>4</td>
                        <td><img src="Audi_Q5_Sportback_IMG_5021.jpg" width="60px" height="60px"></td>
                        <td><a class="collapsed" href="contact-details.html"><button class="btn btn-light btn-sm"><i class="bi bi-eye-fill"></i></button></a></td>
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
                      <tr>
                        <th scope="row"><a href="#">3</a></th>
                        <td>Mercedes cdi 220</td>
                        <td>1500 euros</td>
                        <td>6</td>
                        <td><img src="Mercedes_Classe_C_002.jpg" width="60px" height="60px"></td>
                        <td><a class="collapsed" href="produits-details.html"><button class="btn btn-light btn-sm"><i class="bi bi-eye-fill"></i></button></a></td>
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
                      <tr>
                        <th scope="row"><a href="#">4</a></th>
                        <td>Range Rover Evoque</td>
                        <td>2500 euros</td>
                        <td>2</td>
                        <td><img src="1200px-Land_Rover_Range_Rover_Evoque_L538_4_China_2014-04-25.jpg" width="60px" height="60px"></td>
                        <td><a class="collapsed" href="produits-details.html"><button class="btn btn-light btn-sm"><i class="bi bi-eye-fill"></i></button></a></td>
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
                      <tr>
                        <th scope="row"><a href="#">5</a></th>
                        <td>Clio</td>
                        <td>1500 euros</td>
                        <td>1</td>
                        <td><img src="1t1TM1Bn1K1Bq.1_11.jpg" width="60px" height="60px"></td>
                        <td><a class="collapsed" href="produits-details.html"><button class="btn btn-light btn-sm"><i class="bi bi-eye-fill"></i></button></a></td>
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
                     
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->



      </div>
    </section>

  </main><!-- End #main -->

  @endsection