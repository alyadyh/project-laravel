@extends('layouts.web')

@section('content')

<!-- CONTACT -->
<section id="contact">
    <div class="container">
        <div class="intro row">
            <div class="col-12 intro">
                <h1>Get in <span>touch.</span></h1>
            </div>
        </div>
        <form method="POST" action="/contact" class="row g-3">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <textarea name="message" id="" cols="30" rows="10" class="form-control" placeholder="Enter message"></textarea>
            </div>
            <div>
                <button class="btn btn-brand">Send Message</button>
            </div>
        </form>
    </div>
</section>

@endsection