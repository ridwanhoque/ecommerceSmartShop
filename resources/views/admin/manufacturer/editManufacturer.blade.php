@extends("admin.master")

@section("mainContent")
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h2>Edit Manufacturer</h2>
        </div>    
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Manufacturer Edit Form
            </div>
            <div class="panel-body">
                {!! Form::open(['url'=>'/manufacturerUpdate/','method'=>'POST','name'=>'editManufacturerForm']) !!}
                <input name="id" type="hidden" value="{{ $manufacturerById->id }}">
                
                <div class="form-group">
                    <label>Manufacturer Name</label>
                    <input name="manufacturer_name" class="form-control" value="{{ $manufacturerById->manufacturer_name }}" type="text" placeholder="Enter Manufacturer Name">
                </div>
                
                <div class="form-group">
                    <label>Manufacturer Description</label>
                    <textarea class="form-control" placeholder="Enter Manufacturer Description" name="manufacturer_description">{{ $manufacturerById->manufacturer_description }}
                    </textarea>
                </div>
                
                <div class="form-group">
                    <label>Publication Status</label>
                    <select name="publication_status" class="form-control">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" name="btn" value="Update">
                </div>
                {!! Form::close() !!}
            </div>
            
        </div>
    </div>
</div>
<script>
document.forms['editManufacturerForm'].elements['publication_status'].value={{ $manufacturerById->publication_status }}
</script>
@endsection