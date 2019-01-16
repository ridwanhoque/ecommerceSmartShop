@extends("admin.master")

@section("mainContent")
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h2>Add Product</h2>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Add Product Form
            </div>
            <div class="panel-body">
                
                @if(Session::get('message'))
                <div class="alert alert-success">{{ Session::get('message') }}</div>
                @endif
                
                {!! Form::open(['url'=>'/productSave/','method'=>'post','enctype'=>'multipart/form-data']) !!}


                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" name="product_name" class="form-control">
                    <div class="text-danger">{{ $errors->has('product_name') ? $errors->first('product_name'):'' }}</div>
                </div>

                <div class="form-group">
                    <label>Product Category</label>
                    <select name="category_id" class="form-control">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Product Manufacturer</label>
                    <select name="manufacturer_id" class="form-control">
                        @foreach($maufacturers as $manufacturer)
                        <option value="{{ $manufacturer->id }}">{{ $manufacturer->manufacturer_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Product Price</label>
                    <input type="number" name="product_price" class="form-control">
                    <div class="text-danger">{{ $errors->has('product_price') ? $errors->first('product_price'):'' }}</div>
                </div>

                <div class="form-group">
                    <label>Product Quantity</label>
                    <input type="number" name="product_quantity" class="form-control">
                </div>

                <div class="form-group">
                    <label>Product Short Description</label>
                    <textarea name="product_short_description" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label>Product Long Description</label>
                    <textarea name="product_long_description" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label>Product Image</label>
                    <input type="file" name="product_image" class="form-control" accept="image/*">
                    <div class="text-danger">{{ $errors->has('product_image') ? $errors->first('product_image'):'' }}</div>
                </div>

                <div class="form-group">
                    <label>Publication Status</label>
                    <select name="publication_status" class="form-control">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>    

                <div class="form-group">
                    <input type="submit" name="btn" value="Save" class="btn btn-primary">
                </div>
                {!! Form::close() !!}
            </div>
        </div>

    </div>
</div>
@endsection