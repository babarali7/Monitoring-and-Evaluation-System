@extends('layouts.app-master')

@section('content')
<div class="content">
    <div class="container-fluid"> 

        <div class="bg-light p-4 rounded">
            <h1>Update user</h1>
            
            <div class="container mt-4">
                <form method="post" action="{{ route('users.update', $user->id) }}">
                    @method('patch')
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input value="{{ $user->name }}" 
                            type="text" 
                            class="form-control" 
                            name="name" 
                            placeholder="Name" required>

                        @if ($errors->has('name'))
                            <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input value="{{ $user->email }}"
                            type="email" 
                            class="form-control" 
                            name="email" 
                            placeholder="Email address" required>
                        @if ($errors->has('email'))
                            <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input value="{{ $user->username }}"
                            type="text" 
                            class="form-control" 
                            name="username" 
                            placeholder="Username" required>
                        @if ($errors->has('username'))
                            <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <select 
                            name="role" class="selectpicker" data-live-search="true" data-style="btn btn-primary" title="Select Role" searchable="Search here.." required>
                            
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}"
                                    {{ in_array($role->name, $userRole) 
                                        ? 'selected'
                                        : '' }}>{{ $role->name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('role'))
                            <span class="text-danger text-left">{{ $errors->first('role') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <select class="selectpicker" data-live-search="true" data-style="btn btn-primary" title="Select Institute" searchable="Search here.." name="inst_id" id="inst_id" required>
                            @foreach($institutes as $ins)
                                <option value="{{ $ins->inst_id }}" {{ $ins->inst_id == $user->inst_id ? 'selected' : '' }}> {{ $ins->inst_name }} </option>
                            @endforeach   
                        </select>
                        @if ($errors->has('inst_id'))
                            <span class="text-danger text-left">{{ $errors->first('inst_id') }}</span>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-success">Update user</button>
                    <a href="{{ route('users.index') }}" class="btn btn-default">Cancel</a>
                </form>
            </div>

        </div>
    </div>
</div>  
      
@endsection
