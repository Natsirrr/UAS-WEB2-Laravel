<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use App\Makul;
use App\Nilai;
use Illuminate\Http\Request;
use Alert;

class NilaiController extends Controller
{
    public function index() {
        $nilai = Nilai::with(['mahasiswa', 'makul'])->get(); 
        return view('nilai.index', compact('nilai'));
    }

    public function create(){
        $mahasiswa = Mahasiswa::all();
        $makul = Makul::all();
        return view('nilai.create', compact('mahasiswa', 'makul'));
    }

    public function store(Request $request){
        Nilai::create($request->all());
        alert()->success('Sukses','Data Berhasil Ditambahkan');
        return redirect()->route('nilai');
    }

    public function edit($id){ 
        
        $makul = Makul::all();
        $mahasiswa = Mahasiswa::all();
        $nilai = Nilai::find($id);
        return view('nilai.edit', compact('nilai', 'makul', 'mahasiswa'));
    }
    public function update(Request $request, $id){
        $nilai = Nilai::find($id);
        $nilai->update($request->all());
        toast('Data Berhasil Diupdate','success');
        return redirect()->route('nilai');
    }

    public function destroy($id){
        $nilai = Nilai::find($id);
        $nilai->delete($id);
        toast('Data Berhasil Dihapus','success');
        return redirect()->route('nilai');
    }
}
