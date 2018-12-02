@extends('layouts.main')

@section('contents')
<section class="slide-wrapper">
        <!-- banner slide -->
        <div class="agile_banner bg1">
            <div class="layer">
                <div class="container">
                    <div class="banner_text_wthree">
                        <div class="d-flex">
                            <h1>hello, </h1>
                            <h2>&nbsp;i'm stephen!</h2>
                        </div>
                        <div id="text" class="banner_text_w3ls my-md-5 my-3"></div>
                        <ul class="list-inline bnr_list_w3">
                            <li class="list-inline-item">
                                <a class="btn  text-white  scroll" href="portfolio.html">view my work </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn  text-white bg-dark scroll" href="{{ route('contact-me') }}">contact me</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection