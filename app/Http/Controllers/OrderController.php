<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use App\Order;
use App\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (Cart::content()) 
        {
            //Create user
            $user = User::where('email', $request->email)->first();
            //return $user;
            if (!$user) 
            {
                $user = User::create([
                    'email' => $request->email,
                ]);
            }
           

            //Create user profile
            if ($user->profile) 
            {
                $user->profile()->update([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'address' => $request->address,
                ]);
            }
            else
            {
                $user->profile()->create([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'address' => $request->address,
                ]);
            }

            //Place order
            $order = new Order();
            $order->amount = total(subtotal());

            $order = $user->orders()->save($order);

            //Assign products to order
            foreach (Cart::content() as $product) 
            {

              $order->products()->attach($product->id, [
                    'qty' => $product->qty,
                ]);
            }

            //Send invoice
            $mail = new OrderMail($order);
            $email = $user->email;
            Mail::to($email)->send($mail);

            //Empty cart
            Cart::destroy();
            //flash success message

            flash()->success('Your order has been received.');
        
            return back();
        }

        //flash warning message
        flash()->warning('There was a problem with your order.');
        //return back
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

}
