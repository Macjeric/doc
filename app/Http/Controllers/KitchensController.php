<?php

namespace App\Http\Controllers;

use App\CakeOrder;
use App\Mail\CakeOrdered;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redis;



class KitchensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $now = Carbon::now(); 
       // echo(arg1) $now->toDayDateTimeString();

        return view('kitchen.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tickets = Redis::get("/orders/ticket");
        Redis::incr("/orders/ticket");

        return view('kitchen.birthday');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate the input requests

        $this->validate($request, [
            'name' => 'required',
            'pnum' => 'required',
            'quantity' => 'required'
        ]);


        $order = new CakeOrder();

        $order->name = request('name');
        $order->pnum = request('pnum');
        $order->kgs = request('kgs');
        $order->quantity = request('quantity');
        $order->choice = request('choice');


        Mail::to(['mack.jeric8@gmail.com', 'janemariana.mack@gmail.com'])->send(
            new CakeOrdered($order)
        );

        return back ()->with('success', 'Your Order have been Placed, Please contact 0743-600-799, the chef for more updates.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

     public function graduation()
    {
        //
        $tickets = Redis::get("/orders/ticket");

        return view('kitchen.graduation')->with('tickets');

    }

    public function wedding()
    {
        $tickets = Redis::get("/orders/ticket");
        Redis::incr("/orders/ticket");

        return view('kitchen.wedding')->with('tickets');
    }
}
