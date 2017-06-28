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
    //return Cart::subtotal();
    //return gettype(Cart::subtotal());
    $s = 0;
    foreach (Cart::content() as $item) 
    {
       $k = $item->price * $item->qty;
       $s = $s + $k;
    }
    
    return (int)$s/100;
}

function tax()
{
    return subtotal() *  0.18;
     //number_format($tax,2);
}

function transport()
{
    if (0<subtotal() && subtotal()<5000) 
    {
       return 100;
    }
    else
    {
        return 0;
    }
}

function total($subtotal)
{
    return subtotal() + tax($subtotal) + transport();
}

function isUser($user)
{
    if ($user) 
    {
       return $user->email;
    }
    else
    {
        return '';
    }
}

function hasProfile($value)
{
    if (Auth::user()) 
    {
       return Auth::user()->profile->$value;
    }
    else
    {
        return '';
    }
}

