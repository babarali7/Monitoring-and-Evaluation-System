@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Edit permission</h2>
        <div class="lead">
            Editing permission.
        </div>

        <div class="container mt-4">

            <form method="POST" action="{{ route('permissions.update', $permission->id) }}">
                @method('patch')
                @csrf
                
                <div class="mb-3">
                    <label for="name" class="form-label">Menu Name</label>
                    <input value="{{ $permission->menu_name }}" 
                        type="text" 
                        class="form-control" 
                        name="menu_name" 
                        placeholder="Menu Name" required>
                  
                </div>
                
                
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input value="{{ $permission->name }}" 
                        type="text" 
                        class="form-control" 
                        name="name" 
                        placeholder="Name" required>

                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                </div>


                <div class="mb-3">
                    <label for="name" class="form-label">Select Parent</label>
                   
                    <select name="parent" class="form-control">
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

                <div class="mb-3">
                    <label for="sort_order" class="form-label">Sort Order</label>
                    <input value="{{ $permission->sort_order }}" 
                        type="number" 
                        class="form-control" 
                        name="sort_order" 
                        placeholder="Sort order" required>
                  
                </div>

                <div class="mb-3">
                    <label for="menu_icon" class="form-label">Menu icon</label>
                    <input value="{{ $permission->menu_icon }}" 
                        type="text" 
                        class="form-control" 
                        name="menu_icon" 
                        placeholder="Menu Icon">
                  
                </div>

                

                <button type="submit" class="btn btn-primary">Save permission</button>
                <a href="{{ route('permissions.index') }}" class="btn btn-default">Back</a>
            </form>
        </div>

    </div>
@endsection