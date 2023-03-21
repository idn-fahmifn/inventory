@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Ruangan
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tr>
                                <th>Detail Gambar</th>
                                <td>
                                <img class="img-thumbnail" src="{{ asset('/storage/images/barang/'.$barang->gambar) }}" width="400px" />
                                </td>
                            </tr>
                            <tr>
                                <th>Nama Ruangan</th>
                                <td>{{$barang->ruangan->nama_ruangan}}</td>
                            </tr>
                            <tr>
                                <th>Kategori/Jenis Barang</th>
                                <td>{{$barang->kategori->nama_kategori}}</td>
                            </tr>
                            <tr>
                                <th>Nomor Barang</th>
                                <td>{{$barang->nomor_barang}}</td>
                            </tr>
                            <tr>
                                <th>Stok Barang</th>
                                <td>{{$barang->stok}} {{$barang->satuan}}</td>
                            </tr>
                            <tr>
                                <th>Kondisi</th>
                                <td>
                                    @if($barang->kondisi == 'baik')
                                    <span class="badge badge-primary">Baik</span>
                                    @elseif($barang->kondisi == 'rusak')
                                    <span class="badge badge-warning">Rusak</span>
                                    @else
                                    <span class="badge badge-warning">Tidak Layak</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Spesifikasi
                                </th>
                                <td>{!!$barang->spek!!}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
