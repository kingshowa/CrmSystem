@extends("layouts.nav-opportunities")

@Section("opportunites")

<main id="main" class="main">

<div class="pagetitle">
  <h1>Add Opportunites</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
      <li class="breadcrumb-item"><a href="{{url('opportunites')}}">Opportunites</a></li>
      <li class="breadcrumb-item active">Add Product Opportunity</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section profile">
  <div class="row">

    <div class="col-xl-12">

      <div class="card"> 
        <div class="card-body pt-3 col-xl-8">

          <form action="{{ url('opp-product/'.$oppId) }}" method="POST">
          {{ csrf_field()}}

                <div class="row mb-3">
                  <label for="about" class="col-md-4 col-lg-3 col-form-label">Product</label>
                  <div class="col-md-8 col-lg-9">
                        <select class="form-select" id="select_box" name="product">
                          <option selected>Choose Product</option>
                          @foreach($products as $product)
                          <option value="{{$product->id}}">{{$product->nom}}</option>
                          @endforeach
                        </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Quantity</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="quantity" type="number" class="form-control" min="1" max="20" value="1">
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Save Opp Product</button>
                </div>
              </form>

        </div>
      </div>

    </div>

  </div>
</section>

</main><!-- End #main -->

@endsection