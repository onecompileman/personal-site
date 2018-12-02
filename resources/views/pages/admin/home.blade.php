@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="panel">
                <ul class="list-group">
                    <li class="list-group-item active"><a>Blogs</a></li>
                    <li class="list-group-item"><a>Projects</a></li>
                    <li class="list-group-item"><a>Contacts Inquiry</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            @yield('list-content')
        </div>
    </div>
</div>
@endsection
