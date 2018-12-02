@extends('pages.admin.home')

@section('list-content')
    <div class="panel">
        <div class="panel-body">
            <h4><a href="/admin"><i class="glyphicon glyphicon-chevron-left"></i></a>&nbsp;Edit Blog</h4>
             @if(Session::has('alert.message'))
                <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> {{ Session::get('alert.message') }}
                </div>
             @endif
            <hr>
            <form action="{{ route('blog-update', ['id' => $blog->id]) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <label for="title">Title <b class="required">*</b></label>
                        <input type="text" class="form-control" name="title" minlength="10" required value="{{ $blog->title }}">
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <label for="title">Tags</label>
                        <input type="text" class="form-control" name="tags" value="{{ $blog->tags }}">
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <label for="title">Is Published</label>
                        <input type="checkbox" class="form-control" name="is_published" @if($blog->is_published) checked @endif>
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="title">Content <b class="required">*</b></label>
                        <textarea id="summernote" name="content" required minlength="100">
                           {{$blog->content}}
                        </textarea>
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="btn btn-danger" style="width: 200px;" onclick="if(confirm('Are you sure to delete blog entitled {{ $blog->title }}?')) window.location.pathname = '/admin/blogs/{{$blog->id}}/delete'">
                            Delete
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 200px;">
                            Update
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

   
@endsection

@section('scripts')
 <script>
        $(document).ready(function () {
          $('#summernote').summernote({
                            height: 300,                 // set editor height
                            minHeight: null,             // set minimum height of editor
                            maxHeight: null,             // set maximum height of editor
                            focus: true                  // set focus to editable area after initializing summernote
           });
       });
    
    </script>
@endsection