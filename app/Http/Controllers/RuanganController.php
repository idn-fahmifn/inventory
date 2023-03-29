<?php

namespace App\Http\Controllers;

use App\Ruangan;
use App\User;
use App\Barang;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ruangan = Ruangan::all();
        $user = User::all();
        return view('ruangan.index', compact('ruangan', 'user'));
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
        $input['nomor_ruangan'] = 'Ruangan'.' '.random_int(100,9999);
        Ruangan::create($input);
        return redirect('/ruangan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ruangan = Ruangan::find($id);
        $barang = Barang::where('id_ruangan', $id)->get()->all();
        return view('ruangan.detail', compact('ruangan', 'barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ruangan = Ruangan::find($id);
        $user = User::all();
        return view('ruangan.edit', compact('ruangan','user'));
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ruangan = Ruangan::findOrFail($id);
        $data = $request->all();
        $ruangan->update($data);
        return redirect('/ruangan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Ruangan::findOrFail($id);
        $data->delete();
        return redirect('ruangan');
    }
}
