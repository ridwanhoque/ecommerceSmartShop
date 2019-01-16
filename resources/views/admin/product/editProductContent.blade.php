@extends('admin.master')

@section('mainContent')
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h2>Edit Product</h2>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Product Edit Form
            </div>
            {!! Form::open(['url'=>'productUpdate/','method'=>'post','name'=>'productEditForm']) !!}
            <div class="panel-body">
                <div class="foem-group">
                    <label>Product Name</label>
                    <input type="text" name="product_name" class="form-control" value="{{ $productById->product_name }}">
                </div>
                
                <div class="form-group">
                    <label>Product Category</label>
                    <select name="category_id" class="form-control">  
                        @foreach($activeCategories as $activeCategory)
                        <option value="{{ $activeCategory->id }}">{{ $activeCategory->category_name }}</option>>
                        @endforeach
                    </select>
                </div>
                
                <div class="for-group">
                    <label>Product Manufacturer</label>
                    <select name="manufacturer_id" class="form-control">
                    @foreach($activeManufacturers as $activeManufacturer)
                    <option value="{{ $activeManufacturer->id }}">{{ $activeManufacturer->manufacturer_name }}</option>
                    @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Product Price</label>
                    <input type="number" name="product_price" class="form-control" value="{{ $productById->product_price }}">
                </div>
                
                <div class="form-group">
                    <label>Product Quantity</label>
                    <input type="number" name="product_quantity" class="form-control" value="{{ $productById->product_quantity }}">
                </div>
                
                <div class="form-group">
                    <label>Product Short Description</label>
                    <textarea name="product_short_description" class="form-control">{{ $productById->product_short_description }}
                    </textarea>
                </div>
                
                <div class="form-group">
                    <label>Product Long Description</label>
                    <textarea name="product_long_description" class="form-control">{{ $productById->product_long_description }}
                    </textarea>
                </div>
                
                <div class="form-group">
                    <label>Product Image</label>
                    <input type="file" name="product_image" name="product_image" class="form-control">
                </div>
                
                <div class="form-group">
                    <label>Publication Status</label>
                    <select name="publication_status" class="form-control">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <input type="submit" name="btn" value="Update" class="btn btn-primary">
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>

<script>
    document.forms['productEditForm'].elements['category_id'].value = {{ $productById->category_id }}
    document.forms['productEditForm'].elements['manufacturer_id'].value = {{ $productById->manufacturer_id }}
    document.forms['productEditForm'].elements['publication_status'].value = {{ $productById->publication_status }};
</script>
@endsection