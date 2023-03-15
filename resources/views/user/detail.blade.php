@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail User
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <tr>
                            <th>Nama Lengkap</th>
                            <td>:</td>
                            <td>{{$user->name}}</td>
                        </tr>
                        <tr>
                            <th>Username</th>
                            <td>:</td>
                            <td>{{$user->username}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>:</td>
                            <td>{{$user->email}}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-header">Penanggung Jawab Ruangan</div>

                <div class="card-body">
                    <div class="table-responsive">
                        User Belum Memiliki Ruangan
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
