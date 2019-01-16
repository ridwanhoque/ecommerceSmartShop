@extends('admin.master')

@section('mainContent')
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h2>View Product</h2>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
            Product View
            </div>
            
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <th>Product Name</th>
                        <td>{{ $product->product_name }}</td>
                    </tr>
                    
                    <tr>
                        <th>Product Category</th>
                        <td>{{ $product->category_name }}</td>
                    </tr>
                    
                    <tr>
                        <th>Product Manufacturer</th>
                        <td>{{ $product->manufacturer_name }}</td>
                    </tr>
                    
                    <tr>
                        <th>Product Price</th>
                        <td>{{ $product->product_price }}</td>
                    </tr>
                    
                    <tr>
                        <th>Product Quantity</th>
                        <td>{{ $product->product_quantity }}</td>
                    </tr>
                    
                    <tr>
                        <th>Product Short Description</th>
                        <td>{{ $product->product_short_description }}</td>
                    </tr>
                    
                    <tr>
                        <th>Product Long Descrition</th>
                        <td>{{ $product->product_long_description }}</td>
                    </tr>
                    
                    <tr>
                        <th>Product Image</th>
                        <td><img src='{{ url($product->product_image) }}' width="150" height="150"></td>
                    </tr>
                    
                    <tr>
                        <th>Publication Status</th>
                        <td>{{ $product->publication_status == 1 ? 'Active':'Inactive'}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection