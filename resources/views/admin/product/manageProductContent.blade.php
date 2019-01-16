@extends('admin.master')

@section('mainContent')
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h2>Manage Product</h2>
        </div>  
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
        @if(Session::get('message'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
        @endif
        
        <div class="panel panel-primary">
            <div class="panel-heading">
               Products Table
            </div>
            <div class="panel-body table-responsive">
                <table class="table table-bordered table-striped table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Manufacturer</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->category_name }}</td>
                            <td>{{ $product->manufacturer_name }}</td>
                            <td>BDT {{ $product->product_price }}</td>
                            <td>{{ $product->product_quantity }}</td>
                            <td>{{ $product->publication_status==1 ? 'Active':'Inactive' }}</td>
                            <td>
                                <a href="{{ url('/product/edit/'.$product->id) }}" class="btn btn-success btn-xs">
                                    <span class="fa fa-edit" title="product edit"></span>
                                </a>
                                
                                <a href="{{ url('/product/delete/'.$product->id) }}" class="btn btn-danger btn-xs" onclick="return confirmDelete()">
                                    <span class="fa fa-trash" title="product delete"></span>
                                </a>
                                
                                <a href="{{ url('/product/view/'.$product->id) }}" class="btn btn-info btn-xs">
                                    <span class="fa fa-eye" title="product view"></span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection