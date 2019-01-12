@extends("admin.master")


@section("mainContent")


<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h2>Add Manufacturer</h2>
        </div>
    </div>
</div>

<div class="row">
    {!! Form::open(['url'=>'/manufacturerSave/','method'=>'post']) !!}
    <div class="panel panel-primary">
        <div class="panel-heading">
            Manufacturer Add Form
        </div>

        <div class="panel-body">
            <div class="alert alert-success">
                {{ Session::get("message") }}
            </div>
            
            <div class="form-group">
                <label class="">Manufacturer Name</label>
                <input type="text" class="form-control" name="manufacturer_name" value="" placeholder="Enter Manufacturer">
            </div>

            <div class="form-group">
                <label class="">Manufacturer Description</label>
                <textarea class="form-control" name="manufacturer_description" placeholder="Enter Manufacturer"></textarea>
            </div>


            <div class="form-group">
                <label class="">Publication Status</label>
                <select class="form-control" name="publication_status">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>
            
            <div class="form-group">
                <input type="submit" name="btn" class="btn btn-primary" value="Save">
            </div>
            
            
        </div>
    </div>

    {!! Form::close() !!}
    
</div>
    @endsection