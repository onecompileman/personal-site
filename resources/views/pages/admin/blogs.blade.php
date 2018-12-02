@extends('pages.admin.home')

@section('list-content')
    <div class="panel panel-body">
        <h4>My Blogs&nbsp; 
            <a class="btn btn-primary" href="{{ route('blog-create') }}">
                <i class="fa fa-plus" style="color: white;"></i>
            </a>
        </h4>
        <hr>
        <table class="table table-striped">
            <thead>
              <tr>
                  <th>Date Created</th>
                  <th>Title</th>
                  <th>Is Published</th>
                  <th>Actions</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <div class="btn btn-primary" title="View">
                            <i class="fa fa-eye"></i>
                        </div>
                        <div class="btn btn-info" title="Edit">
                            <i class="fa fa-edit"></i>
                        </div>
                        <div class="btn btn-success" title="Publish">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="btn btn-danger" title="Delete">
                            <i class="fa fa-trash"></i>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function() {
           $('table').DataTable();
        });
    </script>
@endsection