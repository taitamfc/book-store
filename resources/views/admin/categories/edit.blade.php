
@extends('admin.layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Categories</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Categories</li>
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
            <h3 class="card-title">Categories Add</h3>

            <div class="card-tools">
                <a href="{{ route('categories.index') }}" class="btn btn-primary">
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
            <form action="{{ route('categories.update',$item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $item->title }}">
                </div>

                <div class="form-group">
                    <label>Slug</label>
                    <input disabled type="text" name="slug" class="form-control" value="{{ $item->slug }}">
                </div>
                
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control custom-select">
                        <option {{ ($item->status == 1) ? 'selected' : '' }} value="1">Active</option>
                        <option {{ ($item->status == 0) ? 'selected' : '' }} value="0">Hide</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="parent_id">Parent Category</label>
                    <select name="parent_id" class="form-control custom-select">
                        <option value="0">No Parent</option>
                        @foreach( $cat_parents as $cat_parent )
                        <option {{ ($cat_parent->id == $item->parent_id) ? 'selected' : '' }} value="{{ $cat_parent->id }}">{{ $cat_parent->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="banner">Banner</label>
                    <input type="file" name="banner" class="form-control">
                </div>
                @if($item->banner)
                <div class="form-group">
                     <img style="width:350px" src="{{ $item->banner}}">   
                </div>
                @endif

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