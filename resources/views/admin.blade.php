@extends("layouts.Master")

@Section("content")


  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link" href="{{ url('/admin')}}">
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
    <a class="nav-link collapsed" href="{{  url('contacts') }}">
      <i class="bi bi-person-lines-fill"></i><span>Contacts</span>
    </a>
  </li><!-- End Contacts Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('clients')}}">
      <i class="bi bi-person-check-fill"></i><span>Clients</span>
    </a>
  </li><!-- End Clients Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('opportunites')}}">
      <i class="bi bi-bar-chart"></i><span>Oppotunites</span>
    </a>
  </li><!-- End Oppotunites Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('produits')}}">
      <i class="bi bi-gem"></i><span>Produits</span>
    </a>
  </li><!-- End Products Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('utilisateurs')}}">
      <i class="bi bi-person"></i>
      <span>Utilisateurs</span>
    </a>
  </li><!-- End Users Nav -->
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
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">



        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Pie chart card -->

            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Opportunités <span>| Etapes</span></h5>

                  <!-- Pie Chart -->
                  <div id="pieChart" style="min-height: 400px;" class="echart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      echarts.init(document.querySelector("#pieChart")).setOption({
                        tooltip: {
                          trigger: "item"
                        },
                        legend: {
                          orient: "vertical",
                          left: "left"
                        },
                        series: [{
                          name: "Access From",
                          type: "pie",
                          radius: "70%",
                          data: [{
                              value: 1048,
                              name: "Prospection"
                            },
                            {
                              value: 735,
                              name: "Proposition"
                            },
                            {
                              value: 580,
                              name: "Verification"
                            },
                            {
                              value: 484,
                              name: "Gangee"
                            }
                          ],
                          emphasis: {
                            itemStyle: {
                              shadowBlur: 10,
                              shadowOffsetX: 0,
                              shadowColor: "rgba(0, 0, 0, 0.5)"
                            }
                          }
                        }]
                      });
                    });
                  </script>
                  <!-- End Pie Chart -->

                </div>
              </div>
            </div>
            
            <!--Bar Chart card-->
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Opportunité <span>| Mois</span></h5>

                  <!-- Bar Chart -->
                  <div id="barChart" style="min-height: 400px;" class="echart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      echarts.init(document.querySelector("#barChart")).setOption({
                        xAxis: {
                          type: "category",
                          data: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
                        },
                        yAxis: {
                          type: "value"
                        },
                        series: [{
                          data: [120, 200, 150, 80, 70, 110, 130, 170, 80, 40, 120, 130],
                          type: "bar"
                        }]
                      });
                    });
                  </script>
                  <!-- End Bar Chart -->

                </div>
              </div>
            </div>

            

            <!-- Reports -->
            <div class="col-12">
              <div class="card">

                <div class="card-body">
                  <h5 class="card-title">Reports <span>| Today</span></h5>

                  <!-- Line Chart -->
                  <div id="reportsChart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(document.querySelector("#reportsChart"), {
                        series: [{
                          name: "Prospects",
                          data: [31, 40, 28, 51, 42, 82, 56],
                        }, {
                          name: "Contacts",
                          data: [11, 32, 45, 32, 34, 52, 41]
                        }, {
                          name: "Clients",
                          data: [15, 11, 32, 18, 9, 24, 11]
                        }],
                        chart: {
                          height: 350,
                          type: "area",
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ["#4154f1", "#2eca6a", "#ff771d"],
                        fill: {
                          type: "gradient",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: "smooth",
                          width: 2
                        },
                        xaxis: {
                          type: "datetime",
                          categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                        },
                        tooltip: {
                          x: {
                            format: "dd/MM/yy HH:mm"
                          },
                        }
                      }).render();
                    });
                  </script>
                  <!-- End Line Chart -->

                </div>

              </div>
            </div><!-- End Reports -->

            

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Sales Card -->
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
            </div><!-- End Revenue Card -->

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
          

          <!-- Website Traffic -->
          <div class="card">

            <div class="card-body pb-0">
              <h5 class="card-title">Source des Prospects</h5>

              <div id="trafficChart" style="min-height: 500px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#trafficChart")).setOption({
                    tooltip: {
                      trigger: "item"
                    },
                    legend: {
                      top: "5%",
                      left: "center"
                    },
                    series: [{
                      name: "Access From",
                      type: "pie",
                      radius: ["40%", "70%"],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: "center"
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: "18",
                          fontWeight: "bold"
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [
                         {
                          value: 1048,
                          name: "Web"
                        },
                        {
                          value: 484,
                          name: "Salon"
                        },
                        {
                          value: 300,
                          name: "Autre"
                        },
                        {
                          value: 735,
                          name: "Telephone"
                        },
                        {
                          value: 580,
                          name: "Partenaire"
                        },
                        {
                          value: 300,
                          name: "Bouche à oreille"
                        },
                        {
                          value: 484,
                          name: "Liste prospects"
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Website Traffic -->

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  @endsection