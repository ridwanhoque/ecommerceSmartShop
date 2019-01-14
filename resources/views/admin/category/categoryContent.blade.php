@extends("admin.master")

@section("mainContent")
<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header">Add Category</h2>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<div class="row">

    {!! Form::open(['url'=>'/categorySave', 'method'=>'post']) !!}

    <hr>


    <div class="panel panel-primary">

        <div class="panel-heading">
            Category Add Form
        </div>

        <div class="panel-body">
            @if( Session::get('message'))
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
            @endif
            
            <div class="form-group">
                <label>Category Name</label>
                <input class="form-control" type="text" name="category_name" placeholder="Enter Title" value="">
                
                <strong class="text-danger">{{ $errors->has('category_name') ? $errors->first('category_name'):'' }}</strong>
            </div>
            <div class="form-group">
                <label>Category Description</label>
                <textarea class="form-control" name="category_description" placeholder="Enter Description"></textarea>
                <strong class="text-danger">{{ $errors->has('category_description') ? $errors->first('category_description'):'' }}</strong>
            </div>
            <div class="form-group">
                <label>Publication Status</label>
                <select name="publication_status" class="form-control">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="btn" value="Save">
            </div>

        </div>
    </div>


    {!! Form::close() !!}

</div>

@endsection