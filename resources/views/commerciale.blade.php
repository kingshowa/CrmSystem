@extends("layouts.Master")

@Section("content")


  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link" href="{{ url('/commercial')}}">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
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
    <a class="nav-link collapsed" href="{{ url('contacts')}}">
      <i class="bi bi-person-lines-fill"></i><span>Contacts</span>
    </a>
  </li><!-- End Contacts Nav -->


  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('opportunites')}}">
      <i class="bi bi-bar-chart"></i><span>Opportunities</span>
    </a>
  </li><!-- End Oppotunites Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('rendez')}}">
      <i class="bi bi-person"></i>
      <span>Appointments</span>
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
    <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Product<span>| Month</span></h5>

              <!-- Line Chart -->
              <div id="lineChart"></div>

              <script>
                 
                var mois = JSON.parse('{!! json_encode($mois) !!}');
                var values = JSON.parse('{!! json_encode($values) !!}');
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#lineChart"), {
                    series: [{
                      name: "Desktops",
                      data:values,
                    }],
                    chart: {
                      height: 350,
                      type: 'line',
                      zoom: {
                        enabled: false
                      }
                    },
                    dataLabels: {
                      enabled: false
                    },
                    stroke: {
                      curve: 'straight'
                    },
                    grid: {
                      row: {
                        colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                        opacity: 0.5
                      },
                    },
                    xaxis: {
                      categories:mois,
                    }
                  }).render();
                });
              </script>
              <!-- End Line Chart -->

            </div>
            
          </div>
          
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Appointments</h5>

              <!-- Bar Chart -->
              <canvas id="barChart" style="max-height: 400px;"></canvas>
              <script>

                var rendezs = JSON.parse('{!! json_encode($rendezs) !!}');
                var valeur = JSON.parse('{!! json_encode($valeur) !!}');
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#barChart'), {
                    type: 'bar',
                    data: {
                      labels:rendezs,
                      datasets: [{
                        label: 'Bar Chart',
                        data:valeur,
                        backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(255, 159, 64, 0.2)',
                          'rgba(255, 205, 86, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(153, 102, 255, 0.2)',
                          'rgba(201, 203, 207, 0.2)'
                        ],
                        borderColor: [
                          'rgb(255, 99, 132)',
                          'rgb(255, 159, 64)',
                          'rgb(255, 205, 86)',
                          'rgb(75, 192, 192)',
                          'rgb(54, 162, 235)',
                          'rgb(153, 102, 255)',
                          'rgb(201, 203, 207)'
                        ],
                        borderWidth: 1
                      }]
                    },
                    options: {
                      scales: {
                        y: {
                          beginAtZero: true
                        }
                      }
                    }
                  });
                });
              </script>
              <!-- End Bar CHart -->

            </div>
          </div>
        </div>


             <!-- Customers Card -->
            <div class="">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Contact <span>| This Year</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$nbrcontact}}</h6>
                    

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

  </main><!-- End #main -->

  @endsection