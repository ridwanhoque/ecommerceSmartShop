@extends("admin.master")
@section("mainContent")
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h2>Edit Category</h2>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Category Edit Form
            </div>

            <div class="panel-body">
                {!! Form::open(['url'=>'/categoryUpdate/','method'=>'post']) !!}
                <input type="hidden" name="id" value="{{ $categoryById->id }}">
                <div class="form-group">
                    <label>Category Name</label>
                    <input name="category_name" class="form-control" type="text" value="{{ $categoryById->category_name }}">
                    <div class="text-danger">{{ $errors->has('category_name') ? $errors->first('category_name'):'' }}</div>
                </div>

                <div class="form-group">
                    <label>Category Description</label>
                    <textarea name="category_description" class="form-control">{{ $categoryById->category_description }}</textarea>
                    <div class="text-danger">{{ $errors->has('category_description') ? $errors->first('category_description'):'' }}</div>
                </div>
                
                <div class="form-group">
                    <label>Publication Status</label>
                    <select name="publication_status" class="form-control">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <input name="btn" class="btn btn-primary" type="submit" value="Update">
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    @endsection