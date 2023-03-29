@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tambah Data Barang
                </div>
                <div class="card-body">
                    <form action="{{route('barang.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Kategori Barang</span>
                                    </div>
                                    <select class="custom-select" name="id_kategori">
                                        <option selected>Choose...</option>
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
                                        <option selected>Choose...</option>
                                        @foreach($ruangan as $row)
                                        <option value="{{$row->id}}">{{$row->nama_ruangan}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Nomor Barang</span>
                                    </div>
                                    <input type="text" name="nomor_barang" class="form-control"
                                        placeholder="Nomor Barang">
                                </div>
                            </div> -->
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Nama Barang</span>
                                    </div>
                                    <input type="text" name="nama_barang" class="form-control"
                                        placeholder="Nama Barang">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="">Stok/Satuan</span>
                                    </div>
                                    <input type="number" name="stok" class="form-control">
                                    <select class="custom-select" name="satuan">
                                        <option selected>Choose...</option>
                                        <option value="unit">Unit</option>
                                        <option value="kilogram">Kilogram</option>
                                        <option value="butir">Butir</option>
                                        <option value="liter">Liter</option>
                                        <option value="lembar">Lembar</option>
                                        <option value="roll">Roll</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="gambar" class="custom-file-input"
                                            id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Kondisi</span>
                                    </div>
                                    <select class="custom-select" name="kondisi">
                                        <option selected>Choose...</option>
                                        <option value="baik">Baik</option>
                                        <option value="rusak">Rusak</option>
                                        <option value="tidak layak">Tidak Layak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-group">
                                    
                                    <textarea class="form-control" name="spek" id="konten"></textarea>
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
            <div class="card mt-4">
                <div class="card-header">Data Ruangan</div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-strip" id="myTable">
                            <thead>
                                <th>Gambar</th>
                                <th>Nomor Barang</th>
                                <th>Nama Barang</th>
                                <th>Tempat</th>
                                <th>Pilihan</th>
                            </thead>
                            <tbody>

                                @foreach($barang as $row)
                                <tr>
                                    <td>
                                    <img class="img-thumbnail" src="{{ asset('/storage/images/barang/'.$row->gambar) }}" width="100px" />
                                    </td>
                                    <td>{{$row->nomor_barang}}</td>
                                    <td>{{$row->nama_barang}}</td>
                                    <td>{{$row->ruangan->nama_ruangan}}</td>
                                    <td>
                                        <form action="{{route('barang.destroy',$row->id)}}" method="post">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Apakah anda akan menghapus {{$row->barang}} ?');">Hapus</button>
                                            <a href="{{route('barang.edit',$row->id)}}"
                                                class="btn btn-warning">Edit</a>
                                            <a href="{{route('barang.show',$row->id)}}"
                                                class="btn btn-success">Detail</a>
                                        </form>
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
