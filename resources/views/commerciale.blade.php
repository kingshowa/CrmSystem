@extends("layouts.Master")

@Section("content")


  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link" href="{{ url('commerciale')}}">
      <i class="bi bi-grid"></i>
      <span>COMMERCIALE</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('prospects')}}">
      <i class="bi bi-person-plus-fill"></i><span>Prospects</span>
    </a>
    
  </li><!-- End Prospects Nav -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('clients')}}">
      <i class="bi bi-person-check-fill"></i><span>Clients</span>
    </a>
  </li><!-- End Clients Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{  url('contacts') }}">
      <i class="bi bi-person-lines-fill"></i><span>Contacts</span>
    </a>
  </li><!-- End Contacts Nav -->

 

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('opportunites')}}">
      <i class="bi bi-bar-chart"></i><span>Oppotunites</span>
    </a>
  </li><!-- End Oppotunites Nav -->

  
 
  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('rendez')}}">
      <i class="bi bi-person"></i>
      <span>Rendez-Vous</span>
    </a>
  </li>
</ul>

</aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Commerciale</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Commerciale</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Sales <span>| Today</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div>
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Revenue <span>| This Month</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>$3,264</h6>
                      <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div>

             <!-- Customers Card -->
            <div class="">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Customers <span>| This Year</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1244</h6>
                      <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

  </main><!-- End #main -->

  @endsection