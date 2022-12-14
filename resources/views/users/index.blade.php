@extends('layouts.app-master')

@section('content')
    
<div class="content">
    <div class="container-fluid"> 

        <div class="bg-light p-4 rounded">
            <h1>Users  <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm float-right">Add new user</a></h1>
            <div class="lead">
                Manage your users here.
            </div>
            
           
                @include('layouts.partials.messages')
          

            <table id="datatables" class="table table-striped" cellspacing="0" width="100%" style="width:100%">
                <thead>
                <tr>
                    <th scope="col" width="3%">#</th>
                    <th scope="col" width="10%">Name </th>
                    <th scope="col" width="15%">Email</th>
                    <th scope="col" width="10%">Username</th>
                    <th scope="col" width="10%">Roles</th>
                    <th scope="col" width="20%"></th>    
                </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->username }}</td>
                            <td>
                                @foreach($user->roles as $role)
                                    <span class="badge bg-primary">{{ $role->name }}</span>
                                @endforeach
                            </td>
                            <td><a href="{{ route('users.show', $user->id) }}" class="btn btn-warning btn-sm">Show</a>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info btn-sm">Edit</a>
                        
                                {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline', 'onClick'=>'return confirm("Are you sure you want to delete ?");']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="d-flex">
                {!! $users->links() !!}
            </div>

        </div>
    </div>
</div>        
@endsection
