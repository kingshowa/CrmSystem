<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->

    <title>KMIH Car Sale</title>

    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('assets-front/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets-front/css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{asset('assets-front/css/style.css')}}">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->

    
    @yield("frontContent")
    <div class="modal fade" id="EditBookModalLabel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Car</h4>
            </div>
            <div class="modal-body">
            <form id="frmProducts" name="frmProducts" class="form-horizontal" novalidate="">
                <!-- <div class="form-group error">
                 <label for="inputName" class="col-sm-3 control-label">Name</label>
                   <div class="col-sm-9">
                    <input type="text" class="form-control has-error" id="bookId" name="name" placeholder="Product Name" value="">
                   </div>
                   </div> -->
                 <div class="form-group">
                 <label for="inputDetail" class="col-sm-3 control-label">Type</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="bookhgtrName" name="details" placeholder="details" value="">
                    </div>
                </div>
                <div class="form-group">
                 <label for="inputDetail" class="col-sm-3 control-label">Description</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="bookAuthor" name="details" placeholder="details" value="">
                    </div>
                </div>
                <div class="form-group">
                 <label for="inputDetail" class="col-sm-3 control-label">Price</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="details" name="details" placeholder="details" value="">
                    </div>
                </div>

                <div id="bookName"></div>
            </form>
            </div>
            
        </div>
      </div>
  </div>
</div>



  

    
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright © 2022 KMIH CarSale</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{asset('assets-front/js/jquery-2.1.0.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{asset('assets-front/js/popper.js')}}"></script>
    <script src="{{asset('assets-front/js/bootstrap.min.js')}}"></script>

    <!-- Plugins -->
    <script src="{{asset('assets-front/js/scrollreveal.min.js')}}"></script>
    <script src="{{asset('assets-front/js/waypoints.min.js')}}"></script>
    <script src="{{asset('assets-front/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets-front/js/imgfix.min.js')}}"></script> 
    <script src="{{asset('assets-front/js/mixitup.js')}}"></script> 
    <script src="{{asset('assets-front/js/accordions.js')}}"></script>
    
    <!-- Global Init -->
    <script src="{{asset('assets-front/js/custom.js')}}"></script>


     <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/chart.js/chart.min.js')}}"></script>
  <script src="{{asset('assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

  </body>
</html>