@extends('layouts.master')

@section('content')

    <div class="container">
        <h1><p style="text-align:center">Tambah Data Pengiriman Surat</p></h1>
        <form action="/pengirimansurat/store" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">No. Surat</label>
                <input type="text" name="no_surat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Perusahaan</label>
                <input type="text" name="nama_perusahaan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" rows="5"></textarea><br>
                <div id="emailHelp" class="form-text">Masukkan Alamat Lengkap. Contoh: Jl. Tol Gempol - Pandaan, Kecaling, Kemiri Sewu, Kec. Pandaan, Pasuruan, Jawa Timur 67156</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kota/Kab</label>
                <input type="text" name="kota_kab" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                <input type="text" name="ket" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            @csrf
            
            
            <input type="submit" name="submit" class="btn btn-success" value="Save">
        </form>
    </div>
    
@endsection