<?php  


function test()
{
    return 'test';
}

function price($price)
{
    return $price/100;
}


function subtotal()
{
    //return (float)str_replace(',', '', Cart::subtotal());
    //return Cart::subtotal()
    //return gettype(Cart::subtotal());
    // $s = 0;
    // foreach (Cart::content() as $item) 
    // {
    //    $k = $item->price * $item->qty;
    //    $s = $s + $k;
    // }
    
    // return (int)$s;
}

/*function tax()
{
    return subtotal() *  0.18;
     //number_format($tax,2);
}

function transport()
{
    if (subtotal()>5000) 
    {
       return 0;
    }
    else
    {
        return 100;
    }
}

function total($subtotal)
{
    return subtotal() + tax($subtotal) + transport();
}*/

