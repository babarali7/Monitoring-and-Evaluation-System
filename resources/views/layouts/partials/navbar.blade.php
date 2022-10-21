<div class="sidebar" data-color="rose" data-background-color="black" data-image="{!! url('assets/img/sidebar-2.jpg') !!}">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->

  <div class="logo">
    <a href="#" class="simple-text logo-mini">
    </a>
    <a href="#" class="simple-text logo-normal">
      <img src="{!! url('assets/img/tevta.png') !!}" width="130" height="50">
    </a>
  </div>

  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item ">
        <a class="nav-link" href="{{ route('home.index') }}">
          <i class="material-icons">dashboard</i>
          <p> Dashboard </p> 
        </a>
      </li>     
      
     @foreach ($navbars as $navbarItem)
       @if($navbarItem->parent_id == 0)

        <li class="nav-item ">
          <a class="nav-link" data-toggle="collapse" href="#{{ $navbarItem->menu_name }}">
            <i class="material-icons">@if($navbarItem->menu_icon != NULL) {{ $navbarItem->menu_icon }} @else image @endif </i>
            <p> {{ $navbarItem->menu_name }}
              <b class="caret"></b>
            </p>
          </a>
       
          <div class="collapse p_{{ $navbarItem->id }}" id="{{ $navbarItem->menu_name }}">
          
            <ul class="nav">
            
              @foreach ($navbars as $navbarsubItem)
                
              @if($navbarsubItem->parent_id != 0 && $navbarsubItem->parent_id == $navbarItem->id  )

                    <?php $words = explode(" ", $navbarsubItem->menu_name);
                      $acronym = "";
                        foreach ($words as $w) {
                          $acronym .= $w[0];
                        }
                      ?>
                      
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route($navbarsubItem->name) }}">
                      <span class="sidebar-mini"> {{ $acronym }} </span>
                      <span class="sidebar-normal"> {{ $navbarsubItem->menu_name }} </span>
                    </a>
                  </li>
            
              @endif
              
              @endforeach
            
            </ul>
          </div>
      
        </li>
       
        @endif
      @endforeach

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
                   {{ auth()->user()->name }}
              </a>
             
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                <a class="dropdown-item" href="{{ route('users.password') }}">Change Password</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout.perform') }}">Log out</a>
              </div>
             
            </li>
          </ul>
          
        </div>
       </div>
    </nav>
    <!-- End Navbar -->
  