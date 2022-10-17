@extends('layouts.app-master')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h6>Laravel 8 Change Password with Current Password Validation - NiceSnippets.com</h6>
                </div>
                <div class="card-body">
                   
                    <div class="mt-2">
                        @include('layouts.partials.messages')
                    </div>


                    @if (count($errors))
                        @foreach ($errors->all() as $error)
                            <p class="alert alert-danger">{{$error}}</p>
                        @endforeach
                    @endif    
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ route('users.updatepassword',[$users->id,$users->slug]) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label>Enter Old Password :</label>
                            <input type="password" id="first-name" class="form-control"  placeholder="Enter old password" name="oldpassword"> 
                        </div>
                        <div class="form-group">
                            <label>Enter New Password :</label>
                            <input type="password" id="first-name" placeholder="Enter new password" class="form-control" name="newpassword"> 
                        </div>
                        <div class="form-group">
                            <label>Enter Confirm Password :</label>  
                            <input type="password" id="first-name"  class="form-control"placeholder="Enter password confirmation"  name="password_confirmation"> 
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

