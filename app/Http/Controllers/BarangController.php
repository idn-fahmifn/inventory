<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Kategori;
use App\Ruangan;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::all();
        $kategori = Kategori::all();
        $ruangan = Ruangan::all();
        return view('barang.index', compact('barang','kategori','ruangan'));
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
        $input = $request->all();
        if($request->hasFile('gambar'))
        {
            $destination_path = 'public/images/barang';
            $image = $request->file('gambar');
            $name = $image->getClientOriginalName();
            $path = $request->file('gambar')->storeAs($destination_path, $name);
            $input['gambar'] = $name;
        }
        $input['nomor_barang'] = 'Barang'.' '.random_int(100,9999);
        Barang::create($input);
        return redirect('/barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = Barang::find($id);
        return view('barang.detail', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::find($id);
        $kategori = Kategori::all();
        $ruangan = Ruangan::all();
        return view('barang.edit', compact('barang', 'kategori', 'ruangan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $barang = Barang::find($id);
        if($request->hasFile('gambar'))
        {
            $destination_path = 'public/images/barang';
            $image = $request->file('gambar');
            $name = $image->getClientOriginalName();
            $path = $request->file('gambar')->storeAs($destination_path, $name);
            $data['gambar'] = $name;
        }
        $barang->update($data);
        return redirect('/barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Barang::findOrFail($id);
        $data->delete();
        return redirect('barang');
    }
}
