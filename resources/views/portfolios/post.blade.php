@extends('layouts.web')

@section('content')

<!-- PORTFOLIO -->
<section id="porto">
    <div class="container">
        <div class="intro row mb-5 align-items-center">
        <div class="col-md-12 col-lg-6 mb-4 mb-lg-0 intro" data-aos="fade-up">
            <h1>My <span>Portfolio.</span></h1>
        </div>
        {{-- <div class="col-md-12 col-lg-6 text-start text-lg-end intro" data-aos="fade-up" data-aos-delay="100">
          <div id="filters" class="filters">
            <a href="#" data-filter="*" class="active">All</a>
            <a href="#" data-filter=".web">Web</a>
            <a href="#" data-filter=".design">Design</a>
            <a href="#" data-filter=".branding">Branding</a>
            <a href="#" data-filter=".photography">Photography</a>
          </div>
        </div> --}}
      </div>
      @foreach ($data as $post)
      <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
        <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
          <a href="/portfolios={{ $post->image_file_url }}" class="{{ $post->title }}">
            <div class="work-info">
              <h3>{{ $post->title }}</h3>
              <span>{{ $post->description }}</span>
            </div>
            <img class="img-fluid" src="https://source.unsplash.com/500x400?{{ $post->image_file_url }}">
          </a>
        </div>
        @endforeach
        {{-- <div class="item photography col-sm-6 col-md-4 col-lg-4 mb-4">
          <a href="#" class="item-wrap fancybox">
            <div class="work-info">
              <h3>Build Indoo</h3>
              <span>Photography</span>
            </div>
            <img class="img-fluid" src="../resources/assets/img/img_2.jpg">
          </a>
        </div>
        <div class="item branding col-sm-6 col-md-4 col-lg-4 mb-4">
          <a href="#" class="item-wrap fancybox">
            <div class="work-info">
              <h3>Cocooil</h3>
              <span>Branding</span>
            </div>
            <img class="img-fluid" src="../resources/assets/img/img_3.jpg">
          </a>
        </div>
        <div class="item design col-sm-6 col-md-4 col-lg-4 mb-4">
          <a href="#" class="item-wrap fancybox">
            <div class="work-info">
              <h3>Nike Shoe</h3>
              <span>Design</span>
            </div>
            <img class="img-fluid" src="../resources/assets/img/img_4.jpg">
          </a>
        </div>
        <div class="item photography col-sm-6 col-md-4 col-lg-4 mb-4">
          <a href="#" class="item-wrap fancybox">
            <div class="work-info">
              <h3>Kitchen Sink</h3>
              <span>Photography</span>
            </div>
            <img class="img-fluid" src="../resources/assets/img/img_5.jpg">
          </a>
        </div>
        <div class="item branding col-sm-6 col-md-4 col-lg-4 mb-4">
          <a href="#" class="item-wrap fancybox">
            <div class="work-info">
              <h3>Amazon</h3>
              <span>brandingn</span>
            </div>
            <img class="img-fluid" src="../resources/assets/img/img_6.jpg">
          </a>
        </div> --}}
      </div>
    </div>
</section>

<div class="divider"></div>

@endsection