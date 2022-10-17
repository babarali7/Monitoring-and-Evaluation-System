<header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="{{ route('home.index') }}" class="nav-link px-2 text-white">Home</a></li>
        
        {{-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
           </a>
           <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
          </ul>
        </li> --}}
       
        
        @auth
          {{-- @role('admin')
          <li><a href="{{ route('users.index') }}" class="nav-link px-2 text-white">Users</a></li>
          <li><a href="{{ route('roles.index') }}" class="nav-link px-2 text-white">Roles</a></li>
          @endrole
          <li><a href="{{ route('posts.index') }}" class="nav-link px-2 text-white">Posts</a></li> --}}
       
        
        @foreach ($navbars as $navbarItem)

           @if($navbarItem->parent_id == 0)
            {{-- <li>
              <a class="nav-link px-2 text-white" href="#">{{ $navbarItem->menu_name }}</a>  
            </li> --}}
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ $navbarItem->menu_name }}
               </a>
               <ul class="dropdown-menu" aria-labelledby="navbarDropdown">


            @foreach ($navbars as $navbarsubItem)
               
             @if($navbarsubItem->parent_id != 0 && $navbarsubItem->parent_id == $navbarItem->id  )
              
             <li><a class="dropdown-item" href="{{ route($navbarsubItem->name) }}">{{ $navbarsubItem->menu_name }}</a></li>
             
             @endif
            

            @endforeach

          </ul>
        </li>
           @endif
        @endforeach

        @endauth

      </ul>

      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
        <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
      </form>

      @auth
        {{auth()->user()->name}}&nbsp;
        <div class="text-end">
          <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
        </div>
      @endauth

      @guest
        <div class="text-end">
          <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
          <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
        </div>
      @endguest
    </div>
  </div>
</header>