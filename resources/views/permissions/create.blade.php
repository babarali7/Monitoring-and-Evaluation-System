@extends('layouts.app-master')

@section('content')

<div class="content">
    <div class="container-fluid">   
        <div class="col-md-12">
            <form method="POST" action="{{ route('permissions.store') }}">
                @csrf    
                <div class="card">
                    <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">mail_outline</i>
                    </div>
                    <h4 class="card-title">Add Menu</h4>
                    </div>
                    <div class="card-body ">
                    
                        <div class="form-group">
                            <label for="exampleEmail" class="bmd-label-floating">Menu Name</label>
                            <input value="{{ old('menu_name') }}" 
                                type="text" 
                                class="form-control" 
                                name="menu_name"
                                id="exampleEmail" 
                                required>
                        </div>
                        <div class="form-group">
                            <label for="examplePass" class="bmd-label-floating">Menu Url</label>
                            <input value="{{ old('name') }}" 
                                type="text" 
                                class="form-control" 
                                name="name" 
                                id="examplePass" 
                                required>

                            @if ($errors->has('name'))
                                <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="order" class="bmd-label-floating">Sort Order</label>
                            <input value="" 
                                type="number" 
                                class="form-control" 
                                name="sort_order" 
                                id="order" 
                                required>
                        </div>

                        <div class="form-group">
                            <select class="selectpicker" data-live-search="true" data-style="btn btn-primary" title="Select Parent Menu" searchable="Search here.." name="parent" id="parent">
                                <option value="0"> Select Parent </option>
                                @foreach($permissions as $permission)
                                    <option value="{{ $permission->id }}"> {{ $permission->menu_name }} </option>
                                @endforeach   
                            </select>
                        </div> 
                        
                        <div class="form-group">
                            <label for="menu_icon" class="bmd-label-floating">Menu Icon (optional)</label>
                            <input value="" 
                                type="text" 
                                class="form-control" 
                                name="menu_icon" 
                                >
                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="1" name="display_menu" class="display_menu"> Display in Menu
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                        </div>


                    </div>
                    <div class="card-footer ">
                    <button type="submit" class="btn btn-fill btn-rose">Submit</button>
                    <a href="{{ route('permissions.index') }}" class="btn btn-default">Back</a>
                    </div>
                </div>
            </form> 
        </div>       




        {{-- <div class="bg-light p-4 rounded">
            <h2>Add new permission</h2>
            <div class="lead">
                Add new permission.
            </div>

            <div class="container mt-4">

                <form method="POST" action="{{ route('permissions.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="menu_name" class="form-label">Menu Name</label>
                        <input value="{{ old('menu_name') }}" 
                            type="text" 
                            class="form-control" 
                            name="menu_name" 
                            placeholder="Menu Name" required>
                    
                    </div>
                
                    <div class="mb-3">
                        <label for="name" class="form-label">Url</label>
                        <input value="{{ old('name') }}" 
                            type="text" 
                            class="form-control" 
                            name="name" 
                            placeholder="Name" required>

                        @if ($errors->has('name'))
                            <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="parent" class="form-label">Select Parent</label>
                    
                        <select name="parent" class="form-control">
                            <option value="0"> Select Parent </option>
                            @foreach($permissions as $permission)
                            
                            <option value="{{ $permission->id }}"> {{ $permission->menu_name }} </option>
                        
                            @endforeach

                        </select>    
                    
                    </div>

                    <div class="mb-3">
                        <label for="sort_order" class="form-label">Sort Order</label>
                        <input value="" 
                            type="number" 
                            class="form-control" 
                            name="sort_order" 
                            placeholder="Sort Order" required>
                    
                    </div>

                    <div class="mb-3">
                        <label for="menu_icon" class="form-label">Menu Icon</label>
                        <input value="" 
                            type="text" 
                            class="form-control" 
                            name="menu_icon" 
                            placeholder="Menu Icon (optional)">
                    
                    </div>

                    <button type="submit" class="btn btn-primary">Save permission</button>
                    <a href="{{ route('permissions.index') }}" class="btn btn-default">Back</a>
                </form>
            </div>

        </div> --}}
    </div>
</div>        
@endsection