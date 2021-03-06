@extends('pages.admin.home')

@section('list-content')
    <div class="panel panel-body">
        <h4>My Projects&nbsp; 
            <a class="btn btn-primary" href="{{ route('project-create') }}">
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
                  <th>Name</th>
                  <th>Technologies</th>
                  <th>Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                <tr>
                    <td>{{ $project->created_at }}</td>
                    <td>{{ $project->name }}</td>
                    <td>{{ ($project->technologies) }}</td>
                    <td>
                        <a href="{{ route('blog', ['id' => $project->id]) }}" class="btn btn-primary" title="View">
                            <i class="fa fa-eye" style="color: white;"></i>
                        </a>
                        <a href="{{ route('blog-edit', ['id' => $project->id]) }}" class="btn btn-info" title="Edit">
                            <i class="fa fa-edit" style="color: white;"></i>
                        </a>
                        <div class="btn btn-danger" title="Delete" onclick="if(confirm('Are you sure to delete blog entitled {{ $project->title }}?')) window.location.pathname = '/admin/blogs/{{$project->id}}/delete'">
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