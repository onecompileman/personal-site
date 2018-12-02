@extends('pages.admin.home')

@section('list-content')
    <div class="panel">
        <div class="panel-body">
            <h4>Add Blog</h4>
            <hr>
            <form>
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <label for="title">Title <b class="required">*</b></label>
                        <input type="text" class="form-control" name="title">
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <label for="title">Is Published</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="title">Content <b class="required">*</b></label>
                        <textarea id="summernote" name="content"></textarea>
                    </div>
                </div><br><br>
            </form>
        </div>
    </div>
    <script>
    setTimeout(function() {
        $(document).ready(function () {
          $('#summernote').summernote({
                            height: 300,                 // set editor height
                            minHeight: null,             // set minimum height of editor
                            maxHeight: null,             // set maximum height of editor
                            focus: true                  // set focus to editable area after initializing summernote
           });
       });
    }, 1000);
    
    </script>
@endsection