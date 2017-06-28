@extends('layouts.app')

@section('content')

    @include('partials._logo')

    <div class="container">
        <div class="row">
            <div class="col-md-8">

                {{-- Shipping info --}}
                 @component('orders.partials._panel')
                    @slot('title')
                        <h4>Shipping info</h4>
                    @endslot

                    @slot('body')
                    <form action="{{ route('orders.store') }}" method="post">

                        @include('orders.partials._form')

                        <button class="btn btn-primary" type="submit">Place order</button>
                        </form>
                    @endslot
                 @endcomponent  

                 {{-- Order summary --}}
                 @component('orders.partials._panel')
                    @slot('title')
                        <h4>Order summary</h4>
                    @endslot

                    @slot('body')
                        @include('orders.partials._summary')
                    @endslot
                 @endcomponent  

                 {{-- Place order --}}
                 

            </div>
            <div class="col-md-4">
               @component('orders.partials._panel')
                    @slot('title')
                        <h4>Finantial details</h4>
                    @endslot

                    @slot('body')
                        <ul style="list-style: none;">
                            <li>Subtotal <i>-</i> <span>$ {{ subtotal() }}</span></li>
                            <li>Tax <i>-</i> <span>$ {{ tax() }}</span></li>
                            <li>Shipping <i>-</i> <span>$ {{ transport() }} </span></li>
                            <li>Total <i>-</i> <span>$ {{ total(subtotal()) }}</span></li>
                        </ul>
                    @endslot
                 @endcomponent  
            </div>
        </div>
    </div>

@endsection
