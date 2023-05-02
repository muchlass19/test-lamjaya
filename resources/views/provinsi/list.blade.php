@extends('layout.main')
@extends('layout.navbar')
@section('content')
<div class="container">
    <p class="fw-bold text-secondary py-3 border-bottom">Data Provinsi</p>
    <a href="/provinsi/create" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Kode</th>
            <th scope="col">Nama Provinsi</th>
            <th scope="col">Active</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $provinsi)
            <tr>
                <td>{{ $provinsi->kode }}</td>
                <td>{{ $provinsi->nama_provinsi }}</td>
                <td>{{ $provinsi->is_active == 1 ? 'Aktif' : 'Tidak Aktif' }}</td>
                <td>
                    <a href="/provinsi/<?= $provinsi->kode ?>/edit" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/provinsi/<?= $provinsi->kode ?>" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
