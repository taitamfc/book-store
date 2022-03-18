@extends('admin.layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Products</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Products</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Product Add</h3>

            <div class="card-tools">
                <a href="{{ route('products.index') }}" class="btn btn-primary">
                    Back to list <i class="fas fa-table"></i>
                </a>
            </div>
        </div>
        <div class="card-body pb-0" >
            @if(Session::has('message'))
            <p class="alert alert-{{ Session::get('alert-class', 'info') }}">{{ Session::get('message') }}</p>
            @endif
            @if( count($errors->all()) )
                <ul class="alert alert-danger">
                @foreach ($errors->all() as $message)
                    <li>{{ $message }}</li>
                @endforeach
                </ul>
            @endif
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="banner">Price</label>
                            <input type="text" name="price" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="banner">Stock</label>
                            <input type="number" name="stock" class="form-control">
                        </div>
                    </div>
                </div>
               
                
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control custom-select">
                        <option value="1">Active</option>
                        <option value="0">Hide</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="parent_id">Category</label>
                    <select name="category_id" id="" class="form-control">
                        @foreach( $cat_parents as $category )
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @foreach( $category->sub_cats as $category )
                            <option value="{{ $category->id }}">|_ {{ $category->title }}</option>
                            @endforeach
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="banner">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
               
                <div class="form-group">
                    <label for="inputDescription">Description</label>
                    <textarea name="description" class="form-control" rows="4"></textarea>
                </div>
                <div class="form-group">
                    
                    <input type="submit" id="inputProjectLeader" class="btn btn-primary" value="Save">
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->

@endsection