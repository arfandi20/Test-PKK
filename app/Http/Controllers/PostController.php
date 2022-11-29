<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\kategori;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = post::all();
        return view ('post.tampil', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = kategori:: all();
        return view('post.tambah', compact ('kategori'));
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
            'judul' => "required|string",
            'isi' => "required|string",
            'tanggal' => "required|string",
            'kategori' => "required|integer",
        ]);

        post::create(
            [
                'judul' => $request ->judul,
                'isi' => $request ->isi,
                'tanggal' => $request ->tanggal,
                'kategori_id' => $request ->kategori,
            ]
            );
        return redirect('/post');
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
        $data = post::findOrFail ($id);
        $kategori = kategori :: all();
        return view ('post.edit', compact('data', 'kategori'));
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
        $data = post :: findOrFail ($id);
        $data ->update ([
            'judul' => $request ->judul,
            'isi' => $request ->isi,
            'tanggal' => $request ->tanggal,
            'kategori_id' => $request ->kategori,
            'status' =>$request->status,
        ]);

        return redirect('/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data= post::findOrFail($id);
        $data->delete();
        return redirect('/post');
    }

    public function beranda ()
    {
    $data = post::where('status', 'aktif')->get();

    return view('beranda', compact('data'));
    }
}
