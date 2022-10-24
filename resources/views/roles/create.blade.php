@extends('layouts.app-master')

@section('content')

<div class="content">
    <div class="container-fluid"> 

        <div class="bg-light p-4 rounded">
            <h1>Add new role</h1>
            <div class="lead">
                Add new role and assign permissions.
            </div>

            <div class="container mt-4">

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('roles.store') }}">
                    @csrf
                    <div class="mb-3">
                       
                        <input value="{{ old('name') }}" 
                            type="text" 
                            class="form-control" 
                            name="name" 
                            placeholder="Name" required>
                    </div>
                    
                    <h3>Assign Permissions</h3>

                    <table class="table table-striped">
                        <thead>
                            <th scope="col" width="1%"><input type="checkbox" name="all_permission"></th>
                            <th class="text-danger" scope="col" width="40%">Menu Name</th>
                            <th class="text-danger" scope="col" width="20%">Url</th>                           
                            <th class="text-danger" scope="col" width="10%">Guard</th> 
                        </thead>

                        @foreach($permissions as $permission)
                            <tr>
                                <td>
                                    <input type="checkbox" 
                                    name="permission[{{ $permission->name }}]"
                                    value="{{ $permission->name }}"
                                    class='permission'>
                                </td>
                                <td>{{ $permission->menu_name }}</td>
                                <td>{{ $permission->name }}</td>                               
                                <td>{{ $permission->guard_name }}</td>
                            </tr>
                        @endforeach
                    </table>

                    <button type="submit" class="btn btn-primary">Save user</button>
                    <a href="{{ route('roles.index') }}" class="btn btn-default">Back</a>
                </form>
            </div>

        </div>
    </div>
</div>        
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('[name="all_permission"]').on('click', function() {

                if($(this).is(':checked')) {
                    $.each($('.permission'), function() {
                        $(this).prop('checked',true);
                    });
                } else {
                    $.each($('.permission'), function() {
                        $(this).prop('checked',false);
                    });
                }
                
            });
        });
    </script>
@endsection