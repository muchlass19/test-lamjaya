@extends('layout.main')
@extends('layout.navbar')
@section('content')
<div class="container">
    <p class="fw-bold text-secondary py-3 border-bottom">Data Kelurahan</p>
    <a href="/kelurahan/create" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Kode</th>
            <th scope="col">Nama Kelurahan</th>
            <th scope="col">Nama Kecamatan</th>
            <th scope="col">Active</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $kelurahan)
            <tr>
                <td>{{ $kelurahan->kode }}</td>
                <td>{{ $kelurahan->nama_kelurahan }}</td>
                <td>{{ $kelurahan->kecamatan->nama_kecamatan }}</td>
                <td>{{ $kelurahan->is_active == 1 ? 'Aktif' : 'Tidak Aktif' }}</td>
                <td>
                    <a href="/kelurahan/<?= $kelurahan->kode ?>/edit" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/kelurahan/<?= $kelurahan->kode ?>" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
