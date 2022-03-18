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
            <h3 class="card-title">Order Detail</h3>

            <div class="card-tools">
                <a href="{{ route('orders.index') }}" class="btn btn-primary">
                    Back to list <i class="fas fa-table"></i>
                </a>
            </div>
        </div>
        <div class="card-body pb-0">
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
            <form action="{{ route('orders.update',$item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="invoice p-3 mb-3">

                    <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                            From
                            <address>
                                <strong>{{ $item->first_name }} {{ $item->last_name }}</strong><br>
                                {{ $item->address }}<br>
                                Phone: {{ $item->phone }}<br>
                                Email: {{ $item->email }}
                            </address>
                        </div>

                        <div class="col-sm-4 invoice-col">
                            
                        </div>

                        <div class="col-sm-4 invoice-col">

                            <b>Order ID:</b> {{ $item->id }}<br>
                            <b>Order Status:</b> {{ ucfirst($item->order_status) }}<br>
                            <b>Payment Due:</b> {{ date('d-m-Y',strtotime($item->created_at)) }}<br>

                        </div>

                    </div>


                    <div class="row">
                        <div class="col-12 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $item->order_items as $key => $order_item )
                                    <tr>
                                        <td>{{ $key + 1; }}</td>
                                        <td>{{ $order_item->product->title }}</td>
                                        <td>{{ $order_item->quantity }}</td>
                                        <td>{{ number_format($order_item->price) }}</td>
                                        <td>{{ number_format($order_item->price * $order_item->quantity) }}</td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-6">
                            <p class="lead">Payment Methods:</p>
                            
                            <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                               {{ $item->order_note }}
                            </p>
                        </div>

                        <div class="col-6">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>Total:</th>
                                            <td>{{ number_format($item->total) }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>


                    <div class="row no-print">
                        <div class="col-12">
                            <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i
                                    class="fas fa-print"></i> Print</a>
                            
                            <button type="submit" class="btn btn-success float-right">Update</button>
                            <select class="form-control  float-right" name="order_status" style="width:200px; margin-right:10px">
                                <option value="new">New</option>
                                <option value="complete">Complete</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->

@endsection