@extends('pages.admin.home')

@section('list-content')
    <div class="panel">
        <div class="panel-body">
            <h4><a href="{{ route('projects') }}"><i class="glyphicon glyphicon-chevron-left"></i></a>&nbsp;Add Project</h4>
            <hr>
            <form action="{{ route('project-store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <label for="title">Picture <b class="required">*</b></label>
                        <input type="file" class="form-control" name="picture" required>
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <label for="title">Project Name <b class="required">*</b></label>
                        <input type="text" class="form-control" name="name" minlength="10" required>
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <label for="title">Technologies Used <b class="required">*</b></label>
                        <input type="text" class="form-control" name="technologies" minlength="10" required>
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <label for="title">Role <b class="required">*</b></label>
                        <input type="text" class="form-control" name="role" required>
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <label for="title">Link</label>
                        <input type="url" class="form-control" name="link">
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-sm-6">
                       <label for="title">Work from <b class="required">*</b></label>
                       <input type="date" class="form-control" name="work_from">
                    </div>
                    <div class="col-sm-6">
                        <label for="title">Work to <b class="required">*</b></label>
                       <input type="date" class="form-control" name="work_to">
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-sm-12"> 
                       <label for="title">Description <b class="required">*</b></label>
                       <textarea class="form-control" rows="6" name="description" required minlength="20"></textarea>
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