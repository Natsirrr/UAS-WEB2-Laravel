@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Tambah Data
                    </div>
                    <div class="card-body">
                        <form action="{{ route('mhs.simpan') }}" method="POST" class="form-item"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="form-row">

                                    <div class="col">
                                        <label for="">Nama Lengkap</label>
                                        <select name="user_id" id="user_id" class="form-control">
                                            <option value="" disabled selected>-- Pilih Nama User --</option>
                                            @foreach ($user as $u)
                                                <option value="{{ $u->id }}">{{ $u->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col">
                                        <label for="">NPM</label>
                                        <input type="number" name="npm" class="form-control" placeholder="Masukkan NPM"
                                            maxlength="9">
                                    </div>
                                    <div class="col">
                                        <label for="">Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" class="form-control"
                                            placeholder="Masukkan Tempat Lahir">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col">
                                        <label for="">Tanggal Lahir</label>
                                        <input type="date" name="tgl_lahir" class="form-control"
                                            placeholder="Pilih Tanggal Lahir">
                                    </div>
                                    <div class="col">
                                        <label for="">Jenis Kelamin</label>
                                        <select name="gender" id="gender" class="form-control">
                                            <option value="" disabled selected>- Pilih Jenis Kelamin --</option>
                                            <option value="L">Laki-Laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="">Telepon</label>
                                        <input type="number" name="telepon" class="form-control"
                                            placeholder="Masukkan No. Telepon">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col">
                                        <label for="">Alamat</label>
                                        <div class="col-sm-12">
                                            <textarea class="form-control" name="alamat" id="alamat" cols="2" rows="3"
                                                style="resize: none" value="Masukkan Alamat"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-row float-right">
                                    <div class="col">
                                        <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                                        <a href="{{ route('mahasiswa') }}" class="btn btn-md btn-danger">Batal</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
