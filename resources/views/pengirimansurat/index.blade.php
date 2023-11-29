@extends('layouts.master')

@section('content')
    <div class="container">
    <h1><p style="text-align:center">Pengiriman Surat</p></h1>
    <a class="btn btn-primary"  href="/pengirimansurat/create">+ Tambah Data</a>
    <h2></h2>
    <div class="card body">
        <form action="/pengirimansurat" method="GET">
            <div class="input-group">
                <input type="text" class="form-control" name="cari" placeholder="Ketikan sesuatu" value="{{$request->cari}}">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary">Cari</button>
                </div>

            </div>
        </form>

    </div>
    <table class="table table-hover">
        <tr>
            <th>No</th>
            <th>No. Surat</th>
            <th>Nama Perusahaan</th>
            <th>Alamat</th>
            <th>Kota/Kab</th>
            <th>Keterangan</th>
        </tr>
        @foreach($pengirimansurat as $p)
        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->no_surat}}</td>
            <td>{{$p->nama_perusahaan}}</td>
            <td>{{$p->alamat}}</td>
            <td>{{$p->kota_kab}}</td>
            <td>{{$p->ket}}</td>
            <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-warning" href="/pengirimansurat/{{$p->id}}/edit">Edit</a>
                    <form action="/pengirimansurat/{{$p->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger" type="submit" value="Delete">
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </table>
    </div>
@endsection