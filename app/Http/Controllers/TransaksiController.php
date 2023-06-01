<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTransaksiRequest;
use App\Http\Requests\UpdateTransaksiRequest;

class TransaksiController extends Controller
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
    public function customerBuy(Request $request)
    {
        $buku = buku::find($request['checks']);
        $request->request->add(['harga'=>$request->harga,'status' => 'Unpaid']);
        $transaksi = Transaksi::create($request->except(['_token','submit']));
        
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
        
        $params = array(
            'transaction_details' => array(
                'order_id' => $transaksi->id,
                'gross_amount' => $transaksi->harga,
            ),
            'customer_details' => array(
                'name' => $request->nama,
                'email' => $request->email,
            ),
        );
        
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('checks',compact('snapToken','transaksi','buku'));
    }
    
    public function callback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$serverKey);
        if($hashed == $request->signature_key){
            if($request->transaction_status == 'capture'){
                $transaksi = Transaksi::find($request->order_id);
                $transaksi->update(['status' => 'Paid']);
            }
        }
    }

    public function invoice($id)
    {
        $transaksi = Transaksi::find($id);
        return view('invoice', compact('transaksi'));
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \App\Http\Requests\StoreTransaksiRequest  $request
    * @return \Illuminate\Http\Response
    */
    public function store(StoreTransaksiRequest $request)
    {
        //
    }
    
    /**
    * Display the specified resource.
    *
    * @param  \App\Models\Transaksi  $transaksi
    * @return \Illuminate\Http\Response
    */
    public function show(Transaksi $transaksi)
    {
        //
    }
    
    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Transaksi  $transaksi
    * @return \Illuminate\Http\Response
    */
    public function edit(Transaksi $transaksi)
    {
        //
    }
    
    /**
    * Update the specified resource in storage.
    *
    * @param  \App\Http\Requests\UpdateTransaksiRequest  $request
    * @param  \App\Models\Transaksi  $transaksi
    * @return \Illuminate\Http\Response
    */
    public function update(UpdateTransaksiRequest $request, Transaksi $transaksi)
    {
        //
    }
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Transaksi  $transaksi
    * @return \Illuminate\Http\Response
    */
    public function destroy(Transaksi $transaksi)
    {
        //
    }
}
