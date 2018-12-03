@extends('layouts.main')

@section('contents')
    <section class="blogs-container">
          <div class="blogs-header">
             <div class="row">
             <div class="col-md-6 col-sm-12">
            <h1>My Blogs</h1>
            </div>
            <div class="col-md-6 col-sm-12">
            <form action="/blogs" method="GET">
                <div class="md-input">
                <input class="md-form-control" required="" type="text" name="search">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label style="color: white;">Search Articles..</label>
                <i class="fa fa-search"></i>
             </div>
            </form>
             </div>
             </div>
        </div>
        <div class="blogs-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        @if(count($blogs) == 0)
                        <br>
                        <br>
                        <br>
                        <h2>No blog(s) matches your query...</h2>
                        @endif
                        @foreach($blogs as $blog)
                        <div class="blog">
                            <div class="blog-header">
                                <div class="row">
                                <div class="col-sm-2">
                                    <img class="profile-img" src="/images/profile.png" alt="MY Profile">
                                </div> 
                                <div class="col-sm-9">
                                    <br>
                                    <h5>Stephen G. Vinuya</h5>
                                    {{ date('M d,Y', strtotime($blog->created_at)) }}
                                </div>
                                </div>
                            </div>
                            <h3>{{ $blog->title }}</h3>
                            <div class="blog-content">
                                {!! $blog->content !!}                                
                            </div>
                            <br><br>
                            <a href="{{ route('blog', ['id' => $blog->id]) }}" class="btn btn-primary">
                                Read More
                            </a>
                        </div> 
                            
                        @endforeach
                    </div>
                </div>
            </div>
            {{ $blogs->links() }}
        </div>
    </section>
@endsection