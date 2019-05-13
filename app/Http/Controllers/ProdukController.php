<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rand = str_random(8);
        $data = Product::orderBy('id', 'DESC')->get();
        return view('admin.produk')->with('rand', $rand)->with('data', $data);
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
    public function store(Request $req)
    {
        $file = $req->file('gambar');
        $name_file = $file->getClientOriginalName();
        $tujuan = 'uploads';
        $file->move($tujuan, $name_file);

        $input = new Product;
        $input->kode_produk = $req->input('kode_produk');
        $input->nama_produk = $req->input('nama_produk');
        $input->size = $req->input('size');
        $input->harga = $req->input('harga');
        $input->stok = $req->input('stok');
        $input->gambar = $name_file;

        $input->save();
        
        return back();
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
    public function update(Request $req)
    {
        $file = $req->file('gambar');
        $name_file = $file->getClientOriginalName();
        $tujuan = 'uploads';
        $file->move($tujuan, $name_file);

        DB::table('products')->where('id', $req->id)->update([
                    'nama_produk' => $req->input('nama_produk'),
                    'size' => $req->input('size'),
                    'harga' => $req->input('harga'),
                    'stok' => $req->input('stok'),
                    'gambar' => $name_file,
                ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $prod = Product::findOrFail($request->id);
        $prod->delete();
        return back();
    }

}
