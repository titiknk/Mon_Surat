@extends('layouts.master')

@section('content')

    <div class="container">
        <h1><p style="text-align:center">Edit Data Surat Keluar</p></h1>
        <form action="/suratkeluar/{{$suratkeluar->id}}" method="POST">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal Surat</label>
                <input type="text" name="tanggal_surat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$suratkeluar->tanggal_surat}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">No. Surat</label>
                <input type="text" name="no_surat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$suratkeluar->no_surat}}">
            </div>
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Perihal</label>
                <input type="text" name="perihal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$suratkeluar->perihal}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Unit/Tujuan Penerima</label>
                <textarea class="form-control" name="tujuan_penerima" rows="5">{{$suratkeluar->tujuan_penerima}}</textarea><br>
                <div id="emailHelp" class="form-text">Masukkan Unit/Tujuan Penerima Lengkap. Contoh: APARATUR PEMERINTAH DESA SUKOREJO PASURUAN JAWA TIMUR 67161</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">No. Sertifikat Bln Keps</label>
                <input type="text" name="no_sertifikat_bln_keps" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$suratkeluar->no_sertifikat_bln_keps}}">
            </div>
            @csrf
            <input type="submit" name="submit" class="btn btn-success" value="Update">
        </form>
    </div>
@endsection