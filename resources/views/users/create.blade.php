@extends('layouts.app-master')

@section('content')
<div class="content">
    <div class="container-fluid"> 

        <div class="bg-light p-4 rounded">
            <h1>Add new user</h1>
            <div class="lead">
                Add new user and assign role.
            </div>

            <div class="container mt-4">
                <form method="POST" action="">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input value="{{ old('name') }}" 
                            type="text" 
                            class="form-control" 
                            name="name" 
                            required>

                        @if ($errors->has('name'))
                            <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input value="{{ old('email') }}"
                            type="email" 
                            class="form-control" 
                            name="email" 
                            required>
                        @if ($errors->has('email'))
                            <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input value="{{ old('username') }}"
                            type="text" 
                            class="form-control" 
                            name="username" 
                            required>
                        @if ($errors->has('username'))
                            <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="Institute" class="bmd-label-floating">Select Institute</label>
                        <select class="selectpicker" data-live-search="true" data-style="btn btn-primary" title="Select Institute" searchable="Search here.." name="inst_id" id="inst_id">
                            @foreach($institute as $ins)
                                <option value="{{ $ins->inst_id }}"> {{ $ins->inst_name }} </option>
                            @endforeach   
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Save user</button>
                    <a href="{{ route('users.index') }}" class="btn btn-default">Back</a>
                </form>
            </div>

        </div>
    </div>
</div>        
@endsection
