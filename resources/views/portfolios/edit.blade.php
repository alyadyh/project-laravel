@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Edit Portfolio</h1>
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
    <!-- Content Wrapper. Contains page content -->
    <section class="content">
            <!-- Main content -->
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                        @if($errors->any())
                        <div class="alert alert-danger">
                            There's some error(s):
                            <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            </ul>  
                        </div>
                        @endif

                            <div class="card card-warning">
                                <div class="card-header">
                                    <h3 class="card-title">
                                    Portfolio Details
                                    </h3>
                                </div>

                                <form action="{{ route('portfolios.update', $data->id) }}" enctype="multipart/form-data" method="post">
                                @csrf
                                @method('put')
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="title" class="form-label">Title</label>
                                            <input type="text" class="form-control" 
                                                placeholder="Enter title" name="title" value="{{ $data->title }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="slug" class="form-label">Description</label>
                                            <input type="text" class="form-control" 
                                                placeholder="Description" name="description" value="{{ $data->description }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="slug" class="form-label">URL Link</label>
                                            <input type="text" class="form-control" 
                                                placeholder="URL Link" name="url_link">
                                        </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="image_file" value="{{ $data->image_file_url }}">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-warning">Update</button>

                                        <a href="{{ route('portfolios.index') }}" class="btn btn-danger ml-2">Back</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            <!-- /.content -->
    </section>
    <!-- /.content-wrapper -->
@endsection