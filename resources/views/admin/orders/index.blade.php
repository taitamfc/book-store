@extends('admin.layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Orders</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Orders</li>
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
            <h3 class="card-title">Orders</h3>
            <div class="card-tools">
                
            </div>
        </div>
        <div class="card-body p-0">
           
            <div class="col-lg-12">
                @if(Session::has('message'))
                <p class="mt-2 alert alert-{{ Session::get('alert-class', 'info') }}">{{ Session::get('message') }}</p>
                @endif    
                <form class="mt-2" id="filter-items" action="" method="GET">
                    <div class="row">
                        <div class="col-lg-4">
                            <input type="text" name="product_name" id="" class="form-control" value="{{ $product_name }}" placeholder="Enter product name">
                        </div>
                        <div class="col-lg-4">
                            <input type="text" name="customer_info" id="" class="form-control" value="{{ $customer_info }}" placeholder="Enter customer info">
                        </div>
                        <div class="col-lg-2">
                            <select name="status" id="" class="form-control">
                                <option value="">Tất cả trạng thái</option>
                                @foreach( $statuses as $status )
                                <option <?= ($sl_status == $status) ? 'selected' : '';?> value="{{ $status }}">{{ ucfirst($status) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-1">
                            <button type="submit" class="btn btn-info">Filter</button>
                        </div>
                   
                    </div>
                </form>
            </div>
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 30%">
                            Order ID
                        </th>
                        <th style="">
                            Customer
                        </th>
                        <th class="">
                            Total
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
                            <a>
                            #{{ $item->id }}
                            </a>
                            <br>
                            <small>
                                {{ ($item->created_at) ? 'Created '.date('m/d/Y',strtotime($item->created_at)) : ''}}
                            </small>
                        </td>
                        <td>
                        {{ $item->first_name }} {{ $item->last_name }}
                        <br>
                        {{ $item->email }} - {{ $item->phone }}
                        </td>
                        <td>
                        {{ number_format($item->total) }}
                        </td>
                        <td class="project-state">
                            <span class="badge badge-{{ ($item->status) ? 'success' : 'default'}}">
                            {{ $item->order_status }}
                            </span>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="{{ route('orders.show',$item->id) }}">
                                <i class="fas fa-eye">
                                </i>
                                Show
                            </a>
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