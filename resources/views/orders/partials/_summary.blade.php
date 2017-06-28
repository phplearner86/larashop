
<div class="panel-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Sum</th>
                </tr>
            </thead>
            <tbody>
@foreach (Cart::content() as $item)
                <tr>
                    <td>
                        <img id="example" src="{{ asset($item->options->photo) }}" alt=" " class="img-responsive" height="50%">
                    </td>
                    <td>
                        {{ $item->name }}
                    </td>
                    <td>
                        {{ price($item->price) }}
                    </td>
                    <td>
                        {{ $item->qty }}
                    </td>
                    <td>
                        {{ price($item->price * $item->qty) }}
                    </td>
                </tr>
@endforeach
            </tbody>
        </table>
    </div>
   