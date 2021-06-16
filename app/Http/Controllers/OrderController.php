<?php

namespace App\Http\Controllers;

use App\Dish;
use App\Order;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\each;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('orders.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ids    = [1, 2, 3];
        $dishes = [];
        $totPrice = 0;

        foreach ($ids as $id) {
            
            $dish = Dish::findOrFail($id);
            $dishes[] = $dish;
            $totPrice += $dish -> price;
        }

        $order = Order::create(['totPrice' => $totPrice]);
        $order -> dishes() -> attach($dishes);
        $order -> save();

        // factory(Order::class, 1) -> make()
        //     -> each(function ($order, $dishes, $totPrice) {
        //         dd($totPrice);
        //         $order -> dishes() -> attach($dishes);
        //         $order -> totPrice = $totPrice;
        //         $order -> save();
        //     });
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
