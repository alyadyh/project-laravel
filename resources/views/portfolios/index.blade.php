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
        <div class="row">
          <div class="col-12">
            <div class="card table-responsive col-lg-12">
              <!-- /.card-header -->
              <div class="card-body">

                <a href="{{ route('portfolios.create') }}" class="btn btn-primary mb-3">Add Latest Work</a>

                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>URL Link</th>
                    <th>Image File</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($data as $index => $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->description }}</td>
                    <td><a href="<?php echo $item->url_link?>">{{ $item->url_link }}</a></td>
                    <td><img src="{{ asset($item->image_file_url) }}" alt="" width="200"></td>
                    <td width="120">
                      {{-- <a href="{{ route('portfolios.show', $item->id) }}" class="btn btn-info">
                        <span class="nav-icon fas fa-solid fa-eye"></span>
                      </a> --}}
                      <a href="{{ route('portfolios.edit', $item->id) }}" class="btn btn-warning">
                        <span class="nav-icon fas fa-pencil-alt"></span>
                      </a>
                      <button href="" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-portfolio-{{ $item->id }}').submit()"> 
                        <span class="nav-icon fas fa-solid fa-trash"></span>
                      </button>

                      <form id="delete-portfolio-{{ $item->id }}" action="{{ route('portfolios.destroy', $item->id) }}" method="post">
                        @csrf
                        @method('delete')
                      </form>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection