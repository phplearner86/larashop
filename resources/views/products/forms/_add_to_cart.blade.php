<form action="{{ route('carts.store', $product->slug) }}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <input type="text" value="1" name="qty" id="qty">
    </div>
    <div class="form-group">
        <button class="btn-primary">Add to cart</button>
    </div>
</form>