@extends('admin.master')

@section('mainContent')
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h2>Manage User</h2>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                    User Table
            </div>

            <div class="panel-body table-responsive">
                @if(Session::get('message'))
                <div class="alert alert-success">
                    {{ Session::get('message') }}
                </div>
                @endif
                
                
                <h4>Showing {{ $users->count() }} Users of {{ $users->total() }} in this page</h4>
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ID</th>
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>User Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <?php $i = 1; ?>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->address }}</td>
                            <td>
                                <a href="{{ url('/user/edit/'.$user->id) }}" class="btn btn-success btn-xs">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{ url('/user/delete/'.$user->id) }}" class="btn btn-danger btn-xs" onclick="return confirmDelete()">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $users->links() }}
            </div>
        </div>
        @endsection