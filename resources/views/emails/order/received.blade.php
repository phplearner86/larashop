@component('mail::message')
# Introduction
<p>{{ $order['id'] }}</p>

<p>{{ $order['amount'] }}</p>
@foreach ($order->products as $product)
    <p>{{$product->name}}</p>
    <p>{{ $product->pivot->qty }}</p>
@endforeach


@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
