@extends('website.layouts.master')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="slider-area">
                <div class="slider-height2 slider-bg5 d-flex align-items-center justify-content-center">
                    <div class="hero-caption hero-caption2">
                        <h2>Cart</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="cart_area section-padding">
    <div class="container">
        <div class="cart_inner">
            @if(Session::has('success'))
            <div class="alert alert-success mt-10" role="alert">
                {{ Session::get('success')}} 
            </div>
            @endif
            <form action="{{ route('website.cart-update') }}" method="POST">
                @csrf
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $total = 0;
                            foreach($carts as $key => $cart):
                            $total += $cart->price;
                            ?>
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="{{ $cart->product->image }}">
                                        </div>
                                        <div class="media-body">
                                            <p>{{ $cart->product->title }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>{{ number_format($cart->price) }}</h5>
                                </td>
                                <td>
                                <input class="input-number form-control" name="qtys[{{$cart->product_id}}]" style="width:100px" type="number" value="{{ $cart->quantity }}" min="0" max="10">
                                </td>
                                <td>
                                    <h5>{{ number_format($cart->price * $cart->quantity) }}</h5>
                                </td>
                                <td>
                                    <a href="{{ route('website.cart-delete',$cart->product_id) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                            <tr class="bottom_button">
                                <td>
                                    <input type="submit" class="btn" value="Update Cart">
                                </td>
                                <td></td>
                                <td></td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <h5>Subtotal</h5>
                                </td>
                                <td>
                                    <h5>{{ number_format($total) }}</h5>
                                </td>
                            </tr>
            
                        </tbody>
                    </table>
                    <div class="checkout_btn_inner float-right">
                        <a class="btn" href="{{ route('website.shop') }}">Continue Shopping</a>
                        <a class="btn checkout_btn" href="{{ route('website.checkout') }}">Proceed to checkout</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>


@endsection