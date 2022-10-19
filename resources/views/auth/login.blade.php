@extends('layouts.auth-master')

@section('content')
 

<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
        <form method="post" action="{{ route('login.perform') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
          
            <div class="card card-login card-hidden">
                <div class="card-header card-header-rose text-center">
                  <h4 class="card-title">Login</h4>

                  @include('layouts.partials.messages')
                 
                </div>
                <div class="card-body ">
                  <p class="card-description text-center">Welcome</p>
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">email</i>
                        </span>
                      </div>
                      <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                    </div>
                  </span>
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">lock_outline</i>
                        </span>
                      </div>
                      <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                    </div>
                    
                  </span>
                  @if ($errors->has('password'))
                    <div class="category form-category text-danger text-center">
                      {{ $errors->first('password') }}
                    </div>  
                  @endif
                </div>
                <div class="card-footer justify-content-center">
                  <button  type="submit" class="btn btn-rose btn-link btn-lg">Lets Go</button> 
                </div>
              </div>
        </form>
    </div>      
</div>          
@endsection
