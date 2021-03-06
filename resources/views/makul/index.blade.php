@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Matakuliah
                        <a href="{{ route('makul.tambah') }}" class="btn btn-md btn-primary float-right">Tambah Data</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr class="text-center">
                                    <th>NO.</th>
                                    <th>KODE MAKUL</th>
                                    <th>NAMA MAKUL</th>
                                    <th>SKS</th>
                                    <th>AKSI</th>
                                </tr>
                                @foreach ($makul as $mk)
                                    <tr class="text-center">
                                        <td>{{ $mk->id }}</td>
                                        <td>{{ $mk->kd_makul }}</td>
                                        <td>{{ $mk->nama_makul }}</td>
                                        <td>{{ $mk->sks }}</td>
                                        <td>
                                            <a href="{{ route('makul.edit', $mk->id) }}" class="btn btn-sm btn-warning">EDIT </a>
                                            <a href="{{ route('makul.hapus', $mk->id) }}" class="btn btn-sm btn-danger">HAPUS</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
