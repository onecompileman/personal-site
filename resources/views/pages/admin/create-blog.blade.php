@extends('pages.admin.home')

@section('list-content')
    <div class="panel">
        <div class="panel-body">
            <h4><a href="/admin"><i class="glyphicon glyphicon-chevron-left"></i></a>&nbsp;Add Blog</h4>
            <hr>
            <form action="{{ route('blog-store') }}" method="POST">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <label for="title">Title <b class="required">*</b></label>
                        <input type="text" class="form-control" name="title" minlength="10" required>
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <label for="title">Tags</label>
                        <input type="text" class="form-control" name="tags">
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <label for="title">Is Published</label>
                        <input type="checkbox" class="form-control" name="is_published">
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="title">Content <b class="required">*</b></label>
                        <textarea id="summernote" name="content" required minlength="100"></textarea>
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary" style="width: 200px;">
                            Create
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