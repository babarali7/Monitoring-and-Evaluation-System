@extends('layouts.app-master')

@section('content')
   
<div class="content">
    <div class="container-fluid">     
     
      <div class="alert alert-info">
         <span>Welcome  {{ auth()->user()->name }} </span>
      </div>			
    
  
    </div>
</div>


@endsection
