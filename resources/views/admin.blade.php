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
      <i class="bi bi-bar-chart"></i><span>Opportunities</span>
    </a>
  </li><!-- End Oppotunites Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('produits')}}">
      <i class="bi bi-gem"></i><span>Products</span>
    </a>
  </li><!-- End Products Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('utilisateurs')}}">
      <i class="bi bi-person"></i>
      <span>Users</span>
    </a>
  </li><!-- End Users Nav -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('rendez')}}">
      <i class="bi bi-envelope"></i>
      <span>Appointments</span>
    </a>
  </li>
</ul>

</aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Admin Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
    <!-- Chartisan -->
    <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>


    <section class="section dashboard">
      <div class="row">



        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Pie chart card -->

            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  
                  <h5 class="card-title">Opportunities <span>| Stages</span></h5>

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
                               value: {{$oppPro}},
                              name: "Prospection"
                            },
                            {
                               value:  {{$oppProp}},
                              name: "Proposition"
                            },
                            {
                               value:  {{$oppver}},
                              name: "Négociation"
                            },
                            {
                              value:  {{$oppgan}},
                              name: "Gagnée"
                            },
                            {
                              value:  {{$oppper}},
                              name: "Perdue"
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
                  <h5 class="card-title">Opportunities <span>| Month</span></h5>

                  <!-- Bar Chart -->
                  <div id="barChart" style="min-height: 400px;" class="echart"></div>


                  <script>
                    
                    var montant = JSON.parse('{!! json_encode($montant) !!}');
                    var mois = JSON.parse('{!! json_encode($mois) !!}');

                    document.addEventListener("DOMContentLoaded", () => {
                      echarts.init(document.querySelector("#barChart")).setOption({
                        xAxis: {
                          type: "category",
                           data: mois,
                        },
                        yAxis: {
                          type: "value"
                        },
                        series: [{
                          
                           data: montant,
                          type: "bar"
                        }]
                      });
                    });
                  </script>
        
                  <!-- End Bar Chart -->
 
                </div>
              </div>
            </div>

            

            
            

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Sales Card -->
            <div class="">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Products <span>| Total</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                       <h6>{{$allproduit}}</h6>
                      

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div>
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Revenue <span>| This Year</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$nbrproduit}} DZD</h6>
                     
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
                      <h6>{{$nbrclient}}</h6>
                    

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->
          

          <!-- Website Traffic -->
          <div class="card">

            <div class="card-body pb-0">
              <h5 class="card-title">Prospects Sources</h5>

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
                          value: {{$web}},
                          name: "Web"
                        },
                        {
                          value: {{$salon}},
                          name: "Salon"
                        },
                       
                        {
                          value: {{$tel}},
                          name: "Telephone"
                        },
                        
                        {
                          value: {{$autre}},
                          name: "Autre"
                        },
                        {
                          value: {{$bouche}},
                          name: "Word of mouth"
                        },
                        {
                          value: {{$listep}},
                          name: "liste_prospect"
                        },
                        {
                          value: {{$part}},
                          name: "Partenaire"
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