@extends("admin.master")

@section("mainContent")

            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Manage Categories</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    @if(Session::get('message'))
                    <div class="alert alert-success">
                        {{ Session::get('message') }}
                    </div>
                    @endif
                    
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Categories Table
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Category Name</th>
                                        <th>Category Description</th>
                                        <th>Publication Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $category)
                                    <tr class="odd gradeX">
                                        <td>{{ $category->category_name }}</td>
                                        <td>{{ $category->category_description }}</td>
                                        <td>{{ $category->publication_status==1 ? 'Active':'Inactive' }}</td>
                                        <td>
                                            <a class="btn btn-success btn-xs" href="{{ url('/category/edit/'.$category->id) }}">
                                                <span class="fa fa-edit"></span>
                                            </a>
                                            <a class="btn btn-danger btn-xs" href="{{ url('/category/delete/'.$category->id) }}" onclick="return confirmDelete()">
                                                <span class="fa fa-trash"></span>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
         
@endsection