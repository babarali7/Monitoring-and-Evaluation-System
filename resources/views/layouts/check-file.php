
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
   <link href="http://127.0.0.1:8000/assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />

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
    
      <div class="sidebar" data-color="rose" data-background-color="black" data-image="http://127.0.0.1:8000/assets/img/sidebar-2.jpg">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->

        <div class="logo">
            <a href="#" class="simple-text logo-mini">
            </a>
            <a href="#" class="simple-text logo-normal">
            <img src="http://127.0.0.1:8000/assets/img/tevta.png" width="130" height="50">
            </a>
        </div>

        <div class="sidebar-wrapper">
            <ul class="nav">
            <li class="nav-item ">
                <a class="nav-link" href="http://127.0.0.1:8000">
                <i class="material-icons">dashboard</i>
                <p> Dashboard </p> 
                </a>
            </li>     
            
                    
                <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#Users">
                    <i class="material-icons">image</i>
                    <p> Users
                    <b class="caret"></b>
                    </p>
                </a>
            
                <div class="collapse p_7" id="Users">
                
                    <ul class="nav">
                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                    
                                                
                        <li class="nav-item">
                            <a class="nav-link" href="http://127.0.0.1:8000/users/create">
                            <span class="sidebar-mini"> CU </span>
                            <span class="sidebar-normal"> Create User </span>
                            </a>
                        </li>
                    
                                    
                                    
                    
                                                
                        <li class="nav-item">
                            <a class="nav-link" href="http://127.0.0.1:8000/users">
                            <span class="sidebar-mini"> UL </span>
                            <span class="sidebar-normal"> User List </span>
                            </a>
                        </li>
                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                
                    </ul>
                </div>
            
                </li>
            
                            
                <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#General Settings">
                    <i class="material-icons">image</i>
                    <p> General Settings
                    <b class="caret"></b>
                    </p>
                </a>
            
                <div class="collapse p_17" id="General Settings">
                
                    <ul class="nav">
                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                    
                                                
                        <li class="nav-item">
                            <a class="nav-link" href="http://127.0.0.1:8000/permissions">
                            <span class="sidebar-mini"> P </span>
                            <span class="sidebar-normal"> Permissions </span>
                            </a>
                        </li>
                    
                                    
                                    
                    
                                                
                        <li class="nav-item">
                            <a class="nav-link" href="http://127.0.0.1:8000/roles">
                            <span class="sidebar-mini"> R </span>
                            <span class="sidebar-normal"> Roles </span>
                            </a>
                        </li>
                    
                                    
                                
                    </ul>
                </div>
            
                </li>
            
                            
                <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#Posts">
                    <i class="material-icons">image</i>
                    <p> Posts
                    <b class="caret"></b>
                    </p>
                </a>
            
                <div class="collapse p_14" id="Posts">
                
                    <ul class="nav">
                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                    
                                                
                        <li class="nav-item">
                            <a class="nav-link" href="http://127.0.0.1:8000/posts/create">
                            <span class="sidebar-mini"> CP </span>
                            <span class="sidebar-normal"> Create Post </span>
                            </a>
                        </li>
                    
                                    
                                    
                                    
                                    
                                    
                                
                    </ul>
                </div>
            
                </li>
            
                                                                                    
            </ul>
        </div>

    </div>


  <div class="main-panel">    <!-- main panel of the page -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
      <div class="container-fluid">
        <div class="navbar-wrapper">
          <div class="navbar-minimize">
            <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round" style="position:fixed; opacity:0.5">
              <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
              <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
            </button>
          </div>
          <a class="navbar-brand" href="javascript:;"></a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon icon-bar"></span>
          <span class="navbar-toggler-icon icon-bar"></span>
          <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        
        <div class="collapse navbar-collapse justify-content-end">
          <form class="navbar-form">
          </form>
          
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">person</i>
                   Admin
              </a>
             
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                <a class="dropdown-item" href="">Change Password</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="http://127.0.0.1:8000/logout">Log out</a>
              </div>
             
            </li>
          </ul>
          
        </div>
       </div>
    </nav>
    <!-- End Navbar -->
     
             
<div class="content">
    <div class="container-fluid">     
     
      <div class="alert alert-info">
         <span>Welcome  Admin </span>
      </div>			
    
  
    </div>
</div>


      
 
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  

 

  <!--   Core JS Files   -->
  <script src="http://127.0.0.1:8000/assets/js/core/popper.min.js"></script>
  <script src="http://127.0.0.1:8000/assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="http://127.0.0.1:8000/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="http://127.0.0.1:8000/assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <!-- Forms Validations Plugin -->
  <script src="http://127.0.0.1:8000/assets/js/plugins/jquery.validate.min.js"></script>
   <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="http://127.0.0.1:8000/assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="http://127.0.0.1:8000/assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="http://127.0.0.1:8000/assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="http://127.0.0.1:8000/assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="http://127.0.0.1:8000/assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="http://127.0.0.1:8000/assets/js/plugins/arrive.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="http://127.0.0.1:8000/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="http://127.0.0.1:8000/assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
   
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
