@extends('layouts.master')

@section('content')
    <div class="container">
    <h1><p style="text-align:center">Surat Keluar</p></h1>
    <a class="btn btn-primary"  href="/suratkeluar/create">+ Tambah Data</a>
    <h2></h2>
    <div class="card body">
        <form action="/suratkeluar" method="GET">
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
            <th>Tanggal Surat</th>
            <th>No. Surat</th>
            <th>Perihal</th>
            <th>Unit/Tujuan Penerima</th>
            <th>No. Sertifikat Bln Keps</th>
        </tr>
        @foreach($suratkeluar as $s)
        <tr>
            <td>{{$s->id}}</td>
            <td>{{$s->tanggal_surat}}</td>
            <td>{{$s->no_surat}}</td>
            <td>{{$s->perihal}}</td>
            <td>{{$s->tujuan_penerima}}</td>
            <td>{{$s->no_sertifikat_bln_keps}}</td>
            <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-warning" href="/suratkeluar/{{$s->id}}/edit">Edit</a>
                    <form action="/suratkeluar/{{$s->id}}" method="POST">
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