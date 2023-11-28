@extends('layouts.master')

@section('content')

    <div class="container">
        <h1><p style="text-align:center">Edit Data Pengiriman Surat</p></h1>
        <form action="/pengirimansurat/{{$pengirimansurat->id}}" method="POST">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">No. Surat</label>
                <input type="text" name="no_surat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pengirimansurat->no_surat}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Perusahaan</label>
                <input type="text" name="nama_perusahaan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pengirimansurat->nama_perusahaan}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" rows="5">{{$pengirimansurat->alamat}}</textarea><br>
                <div id="emailHelp" class="form-text">Masukkan Alamat Lengkap. Contoh: Jl. Tol Gempol - Pandaan, Kecaling, Kemiri Sewu, Kec. Pandaan, Pasuruan, Jawa Timur 67156</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kota/Kab</label>
                <input type="text" name="kota_kab" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pengirimansurat->kota_kab}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                <input type="text" name="ket" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pengirimansurat->ket}}">
            </div>
            @csrf
            <input type="submit" name="submit" class="btn btn-success" value="Update">
        </form>
    </div>
@endsection