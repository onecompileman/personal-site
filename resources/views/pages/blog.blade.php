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
    <div class="blog-container" style="display: flex; justify-content: center;">
         <div class="col-md-10 col-md-offset-1">
                        <div class="blog" style="border: none;">
                             <h1>{{ $blog->title }}</h1>
                            <div class="blog-header">
                                <div class="row">
                                <div class="col-sm-1">
                                    <img class="profile-img" src="/images/profile.png" alt="MY Profile">
                                </div> 
                                <div class="col-sm-9">
                                    <br>
                                    <h5>Stephen G. Vinuya</h5>
                                    {{ date('M d,Y', strtotime($blog->created_at)) }}
                                </div>
                                </div>
                            </div>
                           
                            <div>
                                {!! $blog->content !!}                                
                            </div>
                        <br><br>
                        <div class="tags-container">
                            Tags: &nbsp;
                            @foreach(explode(',',$blog->tags) as $tag)
                            <a href="/blogs?search={{$tag}}" class="label label-default" style="background-color: #edad29;padding:5px; color:white;margin:5px;">{{$tag}}</a>
                            @endforeach
                        </div>
                        </div>
             <br><br>
             <h3>Leave a comment below...</h3>
             <br><br>           
            <div id="disqus_thread"></div>
            <br><br>  
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://onecompileman.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
@endsection