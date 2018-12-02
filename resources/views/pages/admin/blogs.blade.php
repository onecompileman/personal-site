@extends('pages.admin.home')

@section('list-content')
    <div class="panel panel-body">
        <h4>My Blogs&nbsp; 
            <a class="btn btn-primary" href="{{ route('blog-create') }}">
                <i class="fa fa-plus" style="color: white;"></i>
            </a>
        </h4>
        @if(Session::has('alert.message'))
            <div class="alert alert-success alert-dismissible">
                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                 <strong>Success!</strong> {{ Session::get('alert.message') }}
            </div>
        @endif
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
                @foreach($blogs as $blog)
                <tr>
                    <td>{{ $blog->created_at }}</td>
                    <td>{{ $blog->title }}</td>
                    <td>{{ ($blog->is_published)? 'Published' : 'Not Yet' }}</td>
                    <td>
                        <a href="{{ route('blog', ['id' => $blog->id]) }}" class="btn btn-primary" title="View">
                            <i class="fa fa-eye" style="color: white;"></i>
                        </a>
                        <a href="{{ route('blog-edit', ['id' => $blog->id]) }}" class="btn btn-info" title="Edit">
                            <i class="fa fa-edit" style="color: white;"></i>
                        </a>
                        <div class="btn btn-danger" title="Delete" onclick="if(confirm('Are you sure to delete blog entitled {{ $blog->title }}?')) window.location.pathname = '/admin/blogs/{{$blog->id}}/delete'">
                            <i class="fa fa-trash"></i>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function() {
           $('table').DataTable();
        });
    </script>
@endsection