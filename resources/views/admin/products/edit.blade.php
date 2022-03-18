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
            <form action="{{ route('products.update',$item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $item->title }}">
                </div>
                <div class="form-group">
                    <label>Slug</label>
                    <input type="text" disabled name="slug" class="form-control" value="{{ $item->slug }}">
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="banner">Price</label>
                            <input type="text" name="price" class="form-control" value="{{ $item->price }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="banner">Stock</label>
                            <input type="number" name="stock" class="form-control" value="{{ $item->stock }}">
                        </div>
                    </div>
                </div>
               
                
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control custom-select">
                        <option {{ ($item->status == 1) ? 'selected' : '' }} value="1">Active</option>
                        <option {{ ($item->status == 0) ? 'selected' : '' }} value="0">Hide</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="parent_id">Category</label>
                    <select name="category_id" id="" class="form-control">
                        @foreach( $cat_parents as $category )
                        <option {{ ($category->id == $item->category_id) ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->title }}</option>
                            @foreach( $category->sub_cats as $category )
                            <option {{ ($category->id == $item->category_id) ? 'selected' : '' }} value="{{ $category->id }}">|_ {{ $category->title }}</option>
                            @endforeach
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="banner">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                @if($item->image)
                <div class="form-group">
                     <img style="width:250px" src="{{ $item->image}}">   
                </div>
                @endif
               
                <div class="form-group">
                    <label for="inputDescription">Description</label>
                    <textarea name="description" class="form-control" rows="4">{{ $item->description }}</textarea>
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