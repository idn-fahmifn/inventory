<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $barang = Barang::all();
        $cari = $request->get('keyword');
        if($cari)
        {
            $barang = Barang::where('nama_barang','LIKE',"%$cari%")->paginate(10);
        }
        return view('welcome', compact('barang','cari'));
    }
}
