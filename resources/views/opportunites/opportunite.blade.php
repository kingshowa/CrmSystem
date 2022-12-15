@extends("layouts.nav-opportunities")

@Section("opportunites")

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Opportunite</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{url('opportunites')}}">Opportunite</a></li>
          <li class="breadcrumb-item active">Details Opportunite</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">

        <div class="col-xl-12">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->

              @php ($a = 'active')
              @php ($b = '')
              @php ($a1 = 'show')
              @php ($b1 = '')

              @if($action==2)
                @php ($b = 'active')
                @php ($a = '')
                @php ($a1 = '')
                @php ($b1 = 'show')
              @endif

              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link {{ $a }}" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link {{ $b }}" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Opportunite</button>
                </li>

              </ul>

              <div class="tab-content pt-2 col-xl-8">
              @if($opportunite != null)
                <div class="tab-pane fade {{ $a }} {{ $a1 }} profile-overview" id="profile-overview">


                  <h5 class="card-title">Opportunite Details</h5>

                 

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Opportunity Name</div>
                    <div class="col-lg-9 col-md-8">{{$opportunite->nom}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Stage</div>
                    <div class="col-lg-9 col-md-8">{{$opportunite->etape}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Amount</div>
                    <div class="col-lg-9 col-md-8">{{$amount}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Closing Date</div>
                    <div class="col-lg-9 col-md-8">{{$opportunite->date_cloture}}	</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Client</div>
                    <div class="col-lg-9 col-md-8">{{$opportunite->client}}</div>
                  </div>

                </div>

                <div class="tab-pane fade {{ $b }} {{ $b1 }} profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form action="{{url('opportunite/'.$opportunite->id)}}" method="POST">
                  <input type="hidden" name="_method" value="PUT">
                  {{ csrf_field() }}

                    <div class="row mb-3">
                      <label for="firstName" class="col-md-4 col-lg-3 col-form-label">Opportunity Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="nom" type="text" class="form-control" id="name" value="{{$opportunite->nom}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Closing Date</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="date_cloture" type="date" class="form-control"  value="{{$opportunite->date_cloture}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">Stage</label>
                      <div class="col-md-8 col-lg-9">
                        <select class="form-select" name="etapes" aria-label="Default select example">
                          <option selected value="{{$opportunite->etape}}">{{$opportunite->etape}}</option>
                          <option value="Prospection">Prospection</option>
                          <option value="Proposition">Proposition</option>
                          <option value="Verification">Verification</option>
                          <option value="Gangee">Gangee</option>
                        </select>
                      </div>
                    </div>

                   
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Modifier</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>

                


              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="section">
      <div class="row">
        
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body">
                  <h5 class="card-title">
                    <a href="{{ url('opp-product/'.$opportunite->id)}}">
                      <button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-plus-circle me-1"></i>Add Product</button>
                    </a>
                  </h5>

                  <table class="table table-striped datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Unity Price</th>
                        <th scope="col">Total Price</th>
                        <th scope="col" colspan="2">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                      <tr>
                        <th scope="row">{{$product->idPO}}<a href="#"></a></th>
                        <td>{{$product->nom}}</td>
                        <td>{{$product->quantite}}</td>                     
                        <td>{{$product->prix}}</td>
                        <td>{{$product->prix * $product->quantite}}</td>
                        
                        <td>
                          <a class="collapsed" href="{{url('opp-product-edit/'.$product->idPO.'/'.$product->idOpportunite)}}">
                            <button class="btn btn-light btn-sm"><i class="bi bi-pencil-fill"></i></button>
                          </a>
                        </td>

                        <td>
                          <form action="{{url('opp-product/'.$product->idPO)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#basicModal{{$product->idPO}}"><i class="bi bi-trash-fill"></i></button>
                          
                      
                            <div class="modal fade" id="basicModal{{$product->idPO}}" tabindex="-1">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Confirm Delete Product from Opportunite</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    Are you sure that you want to delete {{$product->nom}} from this opportunity? This action is permanent and can not be undone.
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
            </div>
      </div>
    </section>

   
    @endif
    
  </main><!-- End #main -->

  @endsection