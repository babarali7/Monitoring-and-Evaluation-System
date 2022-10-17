@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
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

    </div>
@endsection