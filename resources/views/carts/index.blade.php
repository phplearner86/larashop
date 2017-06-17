@extends('layouts.app')

@section('content')
    @include('partials._logo')

    <div class="checkout">
            <div class="container">
                <h2>Your shopping cart contains: <span>{{ Cart::count() }} Products</span></h2>
                <div class="checkout-right">
                    <table class="timetable_sub">
                        <thead>
                            <tr>
                                <th>SL No.</th> 
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        @foreach (Cart::content() as $item)
                            @include('carts.partials._item')
                        @endforeach
                        
                                    <!--quantity-->
                                        <script>
                                        $('.value-plus').on('click', function(){
                                            var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
                                            divUpd.text(newVal);
                                        });

                                        $('.value-minus').on('click', function(){
                                            var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
                                            if(newVal>=1) divUpd.text(newVal);
                                        });
                                        </script>
                                    <!--quantity-->
                    </table>
                </div>
                <div class="checkout-left"> 
                    <div class="checkout-left-basket">
                        <h4>Total Amount</h4>
                        <ul>
                            <li>Subtotal <i>-</i> <span>${{ Cart::subtotal() }}</span></li>
                            <li>Tax <i>-</i> <span>${{-- {{ tax() }}  --}}</span></li>
                            <li>Shipping <i>-</i> <span>${{-- {{ transport() }} --}} </span></li>
                            <li>Total <i>-</i> <span>${{-- {{ total(subtotal()) }} --}}</span></li>
                        </ul>
                    </div>
                    <form action="{{ route('carts.destroy') }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <div class="checkout-right-basket">
                        <button>
                            <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Empty Cart</a>
                        </button>
                    </form>
                    <div class="checkout-right-basket">
                        <a href="{{ route('products.index') }}"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Continue Shopping</a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
@endsection