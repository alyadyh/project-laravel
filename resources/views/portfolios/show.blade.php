@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Portfolio</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Portfolio</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row my-3">
          <div class="col-lg-8">
            <h1 class="mb-3">{{ $data->title }}</h1>

            <a href="{{ route('portfolios.index') }}" class="btn btn-success"><span data-feather="arrow-left">Back to all my posts</span></a>
            <a href="{{ route('portfolios.edit') }}" class="btn btn-warning"><span data-feather="edit">Edit</span></a>
            <a href="" class="btn btn-danger"><span data-feather="x-circle">Delete</span></a>

            <img src="https://source.unsplash.com/1200x400?{{ $data->image_file_url }}" alt="{{ $data->image_file_url }}" class="img-fluid">
            <article class="my-3 fs-5">{!! $data->description !!}</article>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection