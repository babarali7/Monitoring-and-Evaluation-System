@extends('layouts.app-master')

@section('content')

<div class="content">
    <div class="container-fluid">   
     
        @include('layouts.partials.messages')

    <div class="bg-light p-4 rounded">
        <h2>Menus & Permissions <a href="{{ route('permissions.create') }}" class="btn btn-primary btn-sm float-right">Add Menu</a></h2>
        <h2 class="small">
            Manage your permissions and menus here.
        </h2>
      
        <table id="datatables" class="table table-striped" cellspacing="0" width="100%" style="width:100%">
            <thead>
            <tr>
                <th scope="col">Menu Name</th>
                <th scope="col">Url</th>
                <th scope="col">Parent ID</th>
                <th scope="col">Sort Order</th>
                <th scope="col">Menu Icon</th>
                <th scope="col">Guard</th> 
                <th scope="col"></th> 
            </tr>
            </thead>
            <tbody>
                @foreach($menudetail as $permission)
                    <tr>
                        <td>{{ $permission->menu_name }}</td>
                        <td>{{ $permission->name }}</td>
                        <td>{{ $permission->parent_title }}</td>
                        <td>{{ $permission->sort_order }}</td>
                        <td>{{ $permission->menu_icon }}</td>
                        <td>{{ $permission->guard_name }}</td>
                        <td><a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-info btn-sm">Edit</a>
                        
                            {!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy', $permission->id],'style'=>'display:inline', 'onClick' => 'return confirm("Are you sure you want to delete ?");']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>


</div>
</div>
@endsection
