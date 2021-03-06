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
            <h3 class="card-title">Categories</h3>
            <div class="card-tools">
                <a href="{{ route('categories.create') }}" class="btn btn-primary" >
                    Add new <i class="fas fa-plus"></i>
                </a>
            </div>
        </div>
        <div class="card-body p-0">
           
            <div class="col-lg-12">
                @if(Session::has('message'))
                <p class="alert alert-{{ Session::get('alert-class', 'info') }}">{{ Session::get('message') }}</p>
                @endif    
                <form class="mt-2" id="filter-items" action="" method="GET">
                    <div class="row">
                        <div class="col-lg-7">
                            <input type="text" name="q" id="" class="form-control" value="{{ $q }}">
                        </div>
                        
                        <div class="col-lg-2">
                            <select name="status" id="" class="form-control">
                                <option value="">Tất cả trạng thái</option>
                                <option <?= ($status == 'active') ? 'selected' : '';?> value="active">Bật</option>
                                <option <?= ($status == 'deactive') ? 'selected' : '';?> value="deactive">Tắt</option>
                            </select>
                        </div>
                        <div class="col-lg-1">
                            <button type="submit" class="btn btn-info">Filter</button>
                        </div>
                        <div class="col-lg-2">
                            <select name="sort" id="sort" class="form-control">
                                <option <?= ($sort == 'id_asc') ? 'selected' : '';?> value="id_asc">ID Giảm dần</option>
                                <option <?= ($sort == 'id_desc') ? 'selected' : '';?> value="id_desc">ID Tăng dần</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 30%">
                            Name
                        </th>
                        <th style="">
                            Banner
                        </th>
                        <th class="">
                            Parent
                        </th>
                        <th style="width: 8%" class="text-center">
                            Status
                        </th>
                        <th style="width: 20%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $items as $item )
                    <tr>
                        <td>
                            {{ $item->id }}
                        </td>
                        <td>
                            <a>
                            {{ $item->title }}
                            </a>
                            <br>
                            <small>
                                {{ ($item->created_at) ? 'Created '.date('m/d/Y',strtotime($item->created_at)) : ''}}
                            </small>
                        </td>
                        <td>
                            @if($item->banner)
                            <img style="width:150px" src="{{ $item->banner}}" alt="Ảnh {{ $item->title }}">   
                            @endif     
                        </td>
                        <td>
                        {{ ($item->parent) ? $item->parent->title : '-' }}
                        </td>
                        <td class="project-state">
                            <span class="badge badge-{{ ($item->status) ? 'success' : 'default'}}">
                            {{ ($item->status) ? 'Active' : 'Deactive'}}
                            </span>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="{{ route('categories.edit',$item->id) }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <form class="d-inline-block" action="{{ route('categories.destroy',$item->id) }}" method="POST">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger btn-sm" onclick=" return confirm('Are you sure ?') ">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            <div class="float-right">
            {{ $items->links() }}
            </div>
            
        </div>
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->

@endsection
@section('footer_script')
<script>
jQuery( document ).ready( function(){
    jQuery('#sort').on('change',function(){
        jQuery('#filter-items').submit();
    });
});
</script>
@endsection