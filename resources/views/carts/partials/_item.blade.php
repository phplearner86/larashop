<tr class="rem1">
    <td class="invert">1</td>
    <td class="invert-image"><a href="single.html"><img src="{{  $item->options->has('photo') ? $item->options->photo : "" }}" alt=" " class="img-responsive" /></a></td>
    <td class="invert">
         <div class="quantity"> 
            <div class="quantity-select">                           
                <div class="entry value-minus" id="minus">&nbsp;</div>
                <div class="entry value" ><span>{{ $item->qty }}</span></div>
                <div class="entry value-plus active" id="plus">&nbsp;</div>
            </div>
        </div>
    </td>
    <td class="invert">{{ $item->name }}</td>
    
    <td class="invert">${{ price($item->price * $item->qty) }}</td>
    <td class="invert">
        <form action="{{ route('carts.delete', $item->rowId) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <div class="rem">
                <button class="close1"> </button>
            </div>
        </form>
        {{-- <script>$(document).ready(function(c) {
            $('.close1').on('click', function(c){
                $('.rem1').fadeOut('slow', function(c){
                    $('.rem1').remove();
                });
                });   
            });
       </script> --}}
    </td>
</tr>