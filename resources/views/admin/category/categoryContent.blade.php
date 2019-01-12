@extends("admin.master")

@section("mainContent")

<div class="row">
    
    {!! Form::open(['url'=>'/categorySave', 'method'=>'post']) !!}

    <hr>
    
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2>Add Category</h2>
        </div>

        <div class="panel-body">
            <div class="alert alert-success">
                 {{ Session::get('message') }}
            </div>
            <div class="form-group">
                <label>Category Name</label>
                <input class="form-control" type="text" name="category_name" placeholder="Enter Title" value="">
            </div>
            <div class="form-group">
                <label>Category Description</label>
                <textarea class="form-control" name="category_description" placeholder="Enter Description"></textarea>
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