<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>KP-TEVTA Monitoring & Evaluation System</title>
     
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="{!! url('assets/css/material-dashboard.css?v=2.1.2') !!}" rel="stylesheet">
   
</head>
<body class="off-canvas-sidebar">
   
   <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-absolute fixed-top">
    <div class="container">
     <!--  <div class="navbar-wrapper"> -->
        <div class="col-md-2">
           <img src="{!! url('assets/img/kpk1.jpg') !!}" style="margin-left:70px;" width="80" height="80">
        </div>
        <div class="col-md-8">
           <h3 style="text-align: center;"><span style="color: green">Monitoring & Evaluation System Khyber Pakhtunkhwa</span>
            <br/> <span style="color: blue">Technical Education & Vocational Training Authority (KP TEVTA)</span>
           </h3>
        </div>  
        <div class="col-md-2">
         <img src="{!! url('assets/img/tevta.png') !!}" width="130" height="60">
        </div>
      <!-- </div> -->
      
    </div>
  </nav>
  <!-- End Navbar -->
   
  <div class="wrapper wrapper-full-page">
    <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('{!! url('assets/img/register-6.png') !!}'); background-size: 95% 85%; background-position: 50% 105%;">
      <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->

    <div class="container">

        @yield('content')
        
    </div>

    <footer class="footer">
      <div class="container">
       
        <div class="copyright float-right">
          &copy;
          <script>
            document.write(new Date().getFullYear())
          </script>, All Rights Reserved
        </div>
      </div>
    </footer>
  </div>
</div>
    

  <!--   Core JS Files   -->
  <script src="{!! url('assets/js/core/jquery.min.js') !!}"></script>
  <script src="{!! url('assets/js/core/popper.min.js') !!}"></script>
  <script src="{!! url('assets/js/core/bootstrap-material-design.min.js') !!}"></script>
  <script src="{!! url('assets/js/plugins/perfect-scrollbar.jquery.min.js') !!}"></script>
  <!--  Notifications Plugin    -->
  <script src="{!! url('assets/js/plugins/bootstrap-notify.js') !!}"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{!! url('assets/js/material-dashboard.js?v=2.1.2') !!}" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  
  <script>
    $(document).ready(function() {
      md.checkFullPageBackgroundImage();
      setTimeout(function() {
        // after 1000 ms we add the class animated to the login/register card
        $('.card').removeClass('card-hidden');
      }, 700);
    });
  </script>


</body>
</html>
