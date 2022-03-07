@extends('frontend.layouts.master')

@section('content')
<section class="order-complete inner-page-sec-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="order-complete-message text-center">
                    <h1>Thank you !</h1>
                    <p>Your order has been received.</p>
                </div>
                <ul class="order-details-list">
                    <li>Order Number: <strong>{{ $order->id }}</strong></li>
                    <li>Date: <strong>{{ date('d/m/Y',strtotime($order->created_at)) }}</strong></li>
                    <li>Total: <strong>{{ number_format($order->total) }}</strong></li>
                    <li>Payment Method: <strong>Check payment</strong></li>
                </ul>
                <p>Pay with cash upon delivery.</p>
                <h3 class="order-table-title">Order Details</h3>
                <div class="table-responsive">
                    <table class="table order-details-table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $order->order_items as $order_item )
                            <tr>
                                <td><a href="{{ route('website.product',$order_item->product->slug) }}">
                                    {{ $order_item->product->title }}
                                </a> <strong>× {{ $order_item->quantity }}</strong>
                                </td>
                                <td><span>{{ number_format($order_item->price) }}</span></td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Payment Method:</th>
                                <td>Check payment</td>
                            </tr>
                            <tr>
                                <th>Total:</th>
                                <td><span>{{ number_format($order->total) }}</span></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection