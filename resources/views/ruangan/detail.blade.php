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
                    <table class="table table-borderless">
                        <tr>
                            <th>Nomor Ruangan</th>
                            <td>:</td>
                            <td>{{$ruangan->nomor_ruangan}}</td>
                        </tr>
                        <tr>
                            <th>Nama Ruangan</th>
                            <td>:</td>
                            <td>{{$ruangan->nama_ruangan}}</td>
                        </tr>
                        <tr>
                            <th>Penanggung Jawab</th>
                            <td>:</td>
                            <td>{{$ruangan->users->name}}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-header">Barang yang Tersedia</div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="myTable">
                            <thead>
                                <th>Nomor Barang</th>
                                <th>Nama Barang</th>
                                <th>Detail</th>
                            </thead>
                            <tbody>
                                @foreach($barang as $row)
                                <tr>
                                    <td>{{$row->nomor_barang}}</td>
                                    <td>{{$row->nama_barang}}</td>
                                    <td>
                                        <a href="{{route('barang.show', $row->id)}}" class="btn btn-primary">Detail</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
