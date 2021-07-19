<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use App\User;
use Illuminate\Http\Request;
Use Alert;

class MahasiswaController extends Controller
{
    public function index(){
        $mahasiswa = Mahasiswa::all();  // select * from nama_tabl
        return view ('mahasiswa.index', compact('mahasiswa'));
    }

    public function create(){

        $user = User::all();
        return view ('mahasiswa.create', compact('user'));
    }

    public function store(Request $request){
        Mahasiswa::create($request->all());
        alert()->success('Sukses','Data Berhasil Ditambahkan');
        return redirect()->route('mahasiswa');
    }

    public function edit($id){
        $user = User::all();
        $mahasiswa = Mahasiswa::find($id);
        return view ('mahasiswa.edit', compact('mahasiswa', 'user'));
    }
    
    public function update(Request $request, $id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        toast('Data Berhasil Diupdate','success');
        return redirect()->route('mahasiswa');
    }

    public function del($id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        toast('Data Berhasil Dihapus','success');
        return redirect()->route('mahasiswa');
    }
}
