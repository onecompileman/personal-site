@extends('layouts.main')

@section('contents')
    <section class="contact-me-container">
         <div class="contact-me-header">
            <h1>Contact Me</h1>
        </div>
        <div class="contact-me-body">
            <div class="container">
                <h4>If you have anything that I can help you with, please do leave me a message here...</h4>
                <div class="row">
                    <div class="col-md-12">
                          <form class="contact-form" method="POST" action="/contacts">
                              @if(Session::has('alert.message'))
                                <div class="alert alert-success alert-dismissible">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Success!</strong> {{ Session::get('alert.message') }}
                                </div>
                              @endif
                            {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="username">Name <b class="required">*</b></label>
                                        <input type="text" class="form-control" name="name" required>  
                                    </div>
                                </div><br><br>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="username">Email <b class="required">*</b></label>
                                        <input type="email" class="form-control" name="email" required>  
                                    </div>
                                </div><br><br>
                                 <div class="row">
                                    <div class="col-sm-12">
                                        <label for="username">Message <b class="required">*</b></label>
                                        <textarea name="message" rows="10" class="form-control" required minlength="20"></textarea>
                                    </div>
                                </div><br><br>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="pull-right">
                                            <button type="submit" class="btn btn-primary pull-right" id="contactSubmitBtn">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection