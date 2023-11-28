<?php

namespace App\Http\Controllers;

use App\Models\PengirimanSurat;
use Illuminate\Http\Request;

class PengirimanSuratController extends Controller
{
    public function index(){
        $pengirimansurat = PengirimanSurat::all();
        return view('pengirimansurat.index', compact(['pengirimansurat']));
    }
    public function create()
    {
        return view('pengirimansurat.create');
    }
    public function store(Request $request)
    {
        //dd($request->except(['_token','submit']));
        PengirimanSurat::create($request->except(['_token','submit']));
        return redirect('/pengirimansurat');
    }
    public function edit($id)
    {
        $pengirimansurat = PengirimanSurat::find($id);
        return view('pengirimansurat.edit', compact(['pengirimansurat']));
    }
    public function update($id, Request $request)
    {
        $pengirimansurat = PengirimanSurat::find($id);
        $pengirimansurat->update($request->except(['_token','submit']));
        return redirect('/pengirimansurat');
    }
    public function destroy($id)
    {
        $pengirimansurat = PengirimanSurat::find($id);
        $pengirimansurat->delete();
        return redirect('/pengirimansurat');
    }
}
