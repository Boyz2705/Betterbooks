<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\kategoriBuku;
// use App\Http\Requests\StorebukuRequest;
// use App\Http\Requests\UpdatebukuRequest;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index', ['bukus' => buku::all()]);
    }

    public function index2()
    {
        // $bukus = Buku::all();
        // return view('admin.buku.Buku', compact(['bukus']));
        $bukus = buku::with('kategoriBuku')->get();
        return view('admin.buku.Buku',compact('bukus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = kategoriBuku::all();
        return view('admin.buku.createBuku',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorebukuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        buku::create($request->except(['_token','submit']));
        return redirect('/Buku');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\buku  $buku
     * @return \Illuminate\Http\Response
     */
    function detail($id)
    {
        $data = buku::find($id);
        return view('detailProduct',['buku'=>$data]) ;
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        {
            $bukus = buku::find($id);
            $categories = kategoriBuku::all();
            return view('admin.buku.editBuku', compact(['bukus','categories']));
        }
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebukuRequest  $request
     * @param  \App\Models\buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        {
            $bukus = buku::find($request['Buks']);
    
            $bukus->update([
                'nama'=>$request['nama'],
                'harga'=>$request['harga'],
                'tglMasuk'=>$request['tglMasuk'],
                'kategori_buku_id'=>$request['kategori_buku_id'],
                'thnTerbit'=>$request['thnTerbit'],
                'image'=>$request['image'],
            ]);

            $bukus->save();
            return redirect('/Buku');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bukus = buku::find($id);
        $bukus->delete();

        return redirect('/Buku');
    }

    public function checkout()
    {
        return view('/form');
    }
}