@extends('layouts.app-master')

@section('content')
    
<div class="content">
    <div class="container-fluid"> 

            <div class="col-md-12">
                <div class="card">
                    <form method="POST" action="{{ route('permissions.update', $permission->id) }}">
                        @method('patch')
                        @csrf
                        <div class="card-header card-header-rose card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">mail_outline</i>
                            </div>
                            <h4 class="card-title">Edit Menu</h4>
                        </div>
                        <br/>
                        <div class="card-body">
                        
                            <div class="form-group">
                                <label for="name" class="">Menu Name</label>
                                <input value="{{ $permission->menu_name }}" 
                                    type="text" 
                                    class="form-control" 
                                    name="menu_name" 
                                    placeholder="Menu Name" required>
                            
                            </div>
                            
                            
                            <div class="form-group">
                                <label for="name" class="">Url</label>
                                <input value="{{ $permission->name }}" 
                                    type="text" 
                                    class="form-control" 
                                    name="name" 
                                    placeholder="Name" required>

                                @if ($errors->has('name'))
                                    <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                @endif
                            </div>


                            <div class="form-group">
                            
                                <select class="selectpicker" data-live-search="true" data-style="btn btn-primary" title="Select Parent Menu" searchable="Search here.." name="parent" id="parent">
                                    <option value="0" @if($permission->parent_id == 0) 
                                                        selected 
                                                        @else   
                                                        @endif > Select Parent </option>
                                    @foreach($permissions as $per)
                                    
                                    <option value="{{ $per->id }}" @if($permission->parent_id == $per->id ) 
                                                                            selected 
                                                                            @else 
                                                                            @endif > {{ $per->menu_name }} </option>
                                
                                    @endforeach

                                </select>    
                            
                            </div>

                            <div class="form-group">
                                <label for="sort_order" class="">Sort Order</label>
                                <input value="{{ $permission->sort_order }}" 
                                    type="number" 
                                    class="form-control" 
                                    name="sort_order" 
                                    placeholder="Sort order" required>
                            
                            </div>

                            <div class="form-group">
                                <label for="menu_icon" class="">Menu icon (optional)</label>
                                <input value="{{ $permission->menu_icon }}" 
                                    type="text" 
                                    class="form-control" 
                                    name="menu_icon" 
                                    placeholder="">
                            
                            </div>

                            <button type="submit" class="btn btn-rose">Update Menu</button>
                            <a href="{{ route('permissions.index') }}" class="btn btn-default">Back</a>
                        </div>
                    </form>
                </div>

            </div>
    </div>
</div>        
@endsection