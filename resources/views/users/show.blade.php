@extends('layouts.app-master')

@section('content')

<div class="content">
    <div class="container-fluid"> 

        <div class="bg-light p-4 rounded">
            <h1>Show user</h1>
            <div class="lead">
                
            </div>
            
            <div class="container mt-4">
                <div>
                    Name: {{ $user->name }}
                </div>
                <div>
                    Email: {{ $user->email }}
                </div>
                <div>
                    Username: {{ $user->username }}
                </div>
                <div>
                    Institute: {{ $user->institute->inst_name }}
                </div>
                <div>
                    Role: 
                    @foreach($user->roles as $role)
                        <span class="badge bg-primary">{{ $role->name }}</span>
                    @endforeach
                </div>
            </div>

        </div>
        <div class="mt-4">
            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info">Edit</a>
            <a href="{{ route('users.index') }}" class="btn btn-default">Back</a>
        </div>
    </div>
</div>
        
@endsection
