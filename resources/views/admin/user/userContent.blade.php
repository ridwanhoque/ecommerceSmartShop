@extends('admin.master')

@section('mainContent')
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h2>Add User</h2>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                User Add Form
            </div>
            <div class="panel-body">
                {!! Form::open(['url'=>'/userSave/','method'=>'post','enctype'=>'multipart/form-data']) !!}
                
                <div class="form-group">
                    <label>User Name</label>
                    <input type="text" name="name" placeholder="Enter Name Here" class="form-control">
                </div>
 
                <div class="form-group">
                    <label>User Address</label>
                    <textarea name="address" placeholder="Enter Address" class="form-control"></textarea>
                </div>
                
                <div class="form-group">
                    <label>User Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Email">
                </div>
                
                <div class="form-group">
                    <label>User Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter Password">
                </div>
                
                <div class="form-group">
                    <input type="submit" name="btn" class="btn btn-success"> 
                </div>
                
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection
