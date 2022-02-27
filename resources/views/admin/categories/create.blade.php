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
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control custom-select">
                        <option value="1">Active</option>
                        <option value="0">Hide</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="parent_id">Parent Category</label>
                    <select name="parent_id" class="form-control custom-select">
                        <option value="1">Active</option>
                        <option value="0">Hide</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="banner">Banner</label>
                    <input type="file" name="banner" class="form-control">
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