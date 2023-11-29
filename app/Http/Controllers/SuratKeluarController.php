<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use Illuminate\Http\Request;

class SuratKeluarController extends Controller
{
    public function index(Request $request){
        if($request){
            $suratkeluar = SuratKeluar::where('tujuan_penerima','like', '%'.$request->cari.'%')->get();
        }else{
            $suratkeluar = SuratKeluar::all();
        }
        return view('suratkeluar.index', compact(['suratkeluar', 'request']));
    }
    public function create()
    {
        return view('suratkeluar.create');
    }
    public function store(Request $request)
    {
        //dd($request->except(['_token','submit']));
        SuratKeluar::create($request->except(['_token','submit']));
        return redirect('/suratkeluar');
    }
    public function edit($id)
    {
        $suratkeluar = SuratKeluar::find($id);
        return view('suratkeluar.edit', compact(['suratkeluar']));
    }
    public function update($id, Request $request)
    {
        $suratkeluar = SuratKeluar::find($id);
        $suratkeluar->update($request->except(['_token','submit']));
        return redirect('/suratkeluar');
    }
    public function destroy($id)
    {
        $suratkeluar = SuratKeluar::find($id);
        $suratkeluar->delete();
        return redirect('/suratkeluar');
    }
}
