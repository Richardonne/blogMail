<?php

namespace App\Http\Controllers;




use App\Mail\OrderShipped;
//use App\Models\Order;
use App\orderone;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Facade\Ignition\IgnitionServiceProvider;


class OrderShipmentController extends Controller
{

    /**
     * Ship the given order.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return 'hello';
    
    }

   public function ship()
    {

        //$arrayOrder = array();

        $order = orderone::find(1);
      //dd($arrayOrder);
        // Ship order...
 
        Mail::to('richard.campbell73@yahoo.com')->send(new OrderShipped($order));
    } 






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       // $order = Orderone::findOrFail($request->id);
 
        // Ship the order...
    
        //Mail::to($request->user())->send(new OrderShipped($order));
       // Mail::to('richard.campbell73@yahoo.com')->send(new OrderShipped($order));

        
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
}
