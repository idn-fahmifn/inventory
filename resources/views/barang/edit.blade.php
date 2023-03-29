@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Data Barang
                </div>
                <div class="card-body">
                    <form action="{{route('barang.update', $barang->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Kategori Barang</span>
                                    </div>
                                    <select class="custom-select" name="id_kategori">
                                        <option selected value="{{$barang->kategori->id}}">{{$barang->kategori->nama_kategori}}</option>
                                        @foreach($kategori as $row)
                                        <option value="{{$row->id}}">{{$row->nama_kategori}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Nama Ruangan</span>
                                    </div>
                                    <select class="custom-select" name="id_ruangan">
                                        <option selected value="{{$barang->ruangan->id}}">{{$barang->ruangan->nama_ruangan}}</option>
                                        @foreach($ruangan as $row)
                                        <option value="{{$row->id}}">{{$row->nama_ruangan}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Nomor Barang</span>
                                    </div>
                                    <input type="text" name="nomor_barang" value="{{$barang->nomor_barang}}" class="form-control"
                                        placeholder="Nomor Barang">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Nama Barang</span>
                                    </div>
                                    <input type="text" name="nama_barang" value="{{$barang->nama_barang}}" class="form-control"
                                        placeholder="Nama Barang">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="">Stok/Satuan</span>
                                    </div>
                                    <input type="number" value="{{$barang->stok}}" name="stok" class="form-control">
                                    <select class="custom-select" name="satuan">
                                        <option selected value="{{$barang->satuan}}">{{$barang->satuan}}</option>
                                        <option value="unit">Unit</option>
                                        <option value="kilogram">Kilogram</option>
                                        <option value="butir">Butir</option>
                                        <option value="liter">Liter</option>
                                        <option value="lembar">Lembar</option>
                                        <option value="roll">Roll</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Kondisi</span>
                                    </div>
                                    <select class="custom-select" name="kondisi">
                                        <option selected value="{{$barang->kondisi}}">{{$barang->kondisi}}</option>
                                        <option value="baik">Baik</option>
                                        <option value="rusak">Rusak</option>
                                        <option value="tidak layak">Tidak Layak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                            <img src="{{ asset('/storage/images/barang/'.$barang->gambar) }}" alt="gambar edit" class="img-thumbnail mb-3" width="100px">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"></span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" value="{{$barang->gambar}}" name="gambar" class="custom-file-input"
                                            id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    
                                    <textarea class="form-control" name="spek" id="konten">
                                        {!! $barang->spek !!}
                                    </textarea>
                                </div>
                            </div>

                            <div class="col-md-6 mt-4">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Tambah Data</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
