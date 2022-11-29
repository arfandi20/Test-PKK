<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = produk::all();
        return view ('produk.tampil', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = kategori:: all();
        return view ('produk.tambah', compact ('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => "required|string",
            'foto' => "required|image|max:10000|mimes:jpeg,jpg",
            'harga' => "required|string",
            'desc_produk' => "required|string",
            'kategori' => "required|integer",
        ]);

        $file = $request->file('foto')->store('foto');
        produk::create(
            [
                'namaProduk' => $request ->nama_produk,
                'foto' => $file,
                'harga' => $request ->harga,
                'descProduk' => $request ->desc_produk,
                'kategori_id' => $request ->kategori,
            ]
            );
        return redirect('/produk');
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
        $data = produk::findOrFail ($id);
        $kategori = kategori :: all();
        return view ('produk.edit', compact('data', 'kategori'));
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
        // $request->validate([
        //     'nama_produk' => "required|string",
        //     'foto' => "required|image|max:10000|mimes:jpeg,jpg",
        //     'harga' => "required|string",
        //     'desc_produk' => "required|string",
        //     'kategori' => "required|integer",
        //     'status' => 'required|string',
        // ]);

        $data = produk :: findOrFail ($id);
        $data ->update ([
            'namaProduk' => $request ->nama_produk,
            'harga' => $request ->harga,
            'descProduk' => $request ->desc_produk,
            'kategori_id' => $request ->kategori,
            'status' => $request ->status
        ]);

        if ($request->file('foto')!= null){
            $file = $request->file('foto')->store('foto');
            $data ->update ([
                'foto'=>$file
            ]);
        } else {
            $data->update([
                'foto' =>$data->foto
            ]);
            return redirect('/produk');
        }

        return redirect('/produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=produk:: findOrFail($id);
        $data ->delete();
        Storage::delete([$data->foto]);
        return redirect('/produk');
    }
}
