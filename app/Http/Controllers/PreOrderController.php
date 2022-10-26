<?php

namespace App\Http\Controllers;

use App\Models\PreOrder;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePreOrderRequest;
use App\Http\Requests\UpdatePreOrderRequest;

class PreOrderController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePreOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PreOrder  $preOrder
     * @return \Illuminate\Http\Response
     */
    public function show(PreOrder $preOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PreOrder  $preOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(PreOrder $preOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePreOrderRequest  $request
     * @param  \App\Models\PreOrder  $preOrder
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePreOrderRequest $request, PreOrder $preOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PreOrder  $preOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(PreOrder $preOrder)
    {
        //
    }
}
