<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>KP-TEVTA Monitoring And Evaluation System</title>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

   <!-- CSS Files -->
   <link href="{!! url('assets/css/material-dashboard.css?v=2.1.2') !!}" rel="stylesheet" />

   <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    
    <!-- SummerNote -->         
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <!-- SummerNote -->
     
    <!-- High Charts CDN -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>  
  </head>

  <body class="">
    <div class="wrapper">
    
      @include('layouts.partials.navbar')
        
        
          @yield('content')
        

      <footer class="footer">
        <div class="container-fluid">
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, All Right Reserved
          </div>
        </div>
      </footer>
 
    </div> <!-- Main panel in navbar blade --> 
  </div> 
    
  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>

  @section("scripts")

  @show

  <!--   Core JS Files   -->
  <script src="{!! url('assets/js/core/popper.min.js') !!}"></script>
  <script src="{!! url('assets/js/core/bootstrap-material-design.min.js') !!}"></script>
  <script src="{!! url('assets/js/plugins/perfect-scrollbar.jquery.min.js') !!}"></script>
  <!-- Plugin for the momentJs  -->
  <script src="{!! url('assets/js/plugins/moment.min.js') !!}"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <!-- Forms Validations Plugin -->
  <script src="{!! url('assets/js/plugins/jquery.validate.min.js') !!}"></script>
   <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="{!! url('assets/js/plugins/bootstrap-selectpicker.js') !!}"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="{!! url('assets/js/plugins/bootstrap-datetimepicker.min.js') !!}"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="{!! url('assets/js/plugins/jquery.dataTables.min.js') !!}"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="{!! url('assets/js/plugins/bootstrap-tagsinput.js') !!}"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="{!! url('assets/js/plugins/jasny-bootstrap.min.js') !!}"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="{!! url('assets/js/plugins/arrive.min.js') !!}"></script>
  <!--  Notifications Plugin    -->
  <script src="{!! url('assets/js/plugins/bootstrap-notify.js') !!}"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{!! url('assets/js/material-dashboard.js?v=2.1.2') !!}" type="text/javascript"></script>
   
  <!-- Excel Export plugin -->
  <script src="https://cdn.jsdelivr.net/npm/tableexport.jquery.plugin@1.6.4/tableExport.min.js"></script>


  <script>
    $(document).ready(function() {
      $('#datatables').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
          [10, 25, 50, -1],
          [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
          search: "_INPUT_",
          searchPlaceholder: "Search records",
        }
      });
    
      $('.datepicker').datetimepicker({
         format: 'DD-MM-YYYY',            
      });

      // initialise Datetimepicker and Sliders
      md.initFormExtendedDatetimepickers();
      if ($('.slider').length != 0) {
        md.initSliders();
      }
    
    });  

  </script>

  </body>
</html>
