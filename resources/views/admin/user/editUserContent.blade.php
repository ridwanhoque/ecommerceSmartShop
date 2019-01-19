@extends('admin.master')

@section('mainContent')
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h2>Edit User</h2>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                User Edit Form
            </div>
            <div class="panel-body">
                {!! Form::open(['url'=>'/userUpdate/','method'=>'post']) !!}
                <input type="hidden" name="id" value="{{ $userById->id }}">
                
                <div class="form-group">
                    <label>User Name</label>
                    <input type="text" name="name" value="{{ $userById->name }}" class="form-control">
                </div>
                
                <div class="form-group">
                    <label>Address</label>
                    <textarea name="address" class="form-control">{{ $userById->address }}</textarea>
                </div>
                
                <div class="form-group">
                    <label>User Email</label>
                    <input type="email" name="email" value="{{ $userById->email }}" class="form-control"> 
                </div>
                
                <div class="form-group">
                    <label>User Password</label>
                    <input type="password" name="password" value="{{ $userById->password }}" class="form-control">
                </div>
                
                <div class="form-group">
                    <input type="submit" name="btn" class="btn btn-primary" value="Update">
                </div>
                
                {!! Form::close() !!}
                
            </div>
        </div>
    </div>
</div>
@endsection