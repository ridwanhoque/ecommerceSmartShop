@extends("admin.master")

@section("mainContent")

<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h2>Manage Manufacturer</h2>
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
                Manufacturers Table
            </div>

            <div class="panel-body">
                <table class="table table-bordered table-striped table-hover" width="100%" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Manufacturer Name</th>
                            <th>Manufacturer Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($manufacturers as $manufacturer)
                        <tr>
                            <td>{{ $manufacturer->manufacturer_name }}</td>
                            <td>{{ $manufacturer->manufacturer_description }}</td>
                            <td>{{ $manufacturer->publication_status==1 ? 'Active':'Inactive' }}</td>
                            <td>
                                <a class="btn btn-success btn-xs" href="{{ url('/manufacturer/edit/'.$manufacturer->id) }}">
                                    <span class="fa fa-edit"title="manufacturer edit"></span>
                                </a>
                                <a class="btn btn-danger btn-xs" href="{{ url('/manufacturer/delete/'.$manufacturer->id) }}" onclick="return confirmDelete()">
                                    <span class="fa fa-trash" title="manufacturer delete"></span>
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