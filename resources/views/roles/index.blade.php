@extends('layouts.app-master')

@section('content')
    
<div class="content">
    <div class="container-fluid">   
     
        @include('layouts.partials.messages')   

        <div class="bg-light p-4 rounded">
            <h1>Roles  <a href="{{ route('roles.create') }}" class="btn btn-primary btn-sm float-right">Add role</a></h1>
            <h2 class="small">
                Manage your roles here.
            </h2>
            
            <table id="datatables" class="table table-striped" cellspacing="0" width="100%" style="width:100%">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $key => $role)
                    <tr>
                        <td>{{ $role->id }}</td>
                        <td>{{ $role->name }}</td>
                        <td>
                            <a class="btn btn-info btn-sm" href="{{ route('roles.show', $role->id) }}">Show</a>
                            <a class="btn btn-primary btn-sm" href="{{ route('roles.edit', $role->id) }}">Edit</a>
                            {{-- {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!} --}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <div class="d-flex">
                {!! $roles->links() !!}
            </div>

        </div>
    </div>
</div>        
@endsection

