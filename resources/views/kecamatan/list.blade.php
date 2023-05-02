@extends('layout.main')
@extends('layout.navbar')
@section('content')
<div class="container">
    <p class="fw-bold text-secondary py-3 border-bottom">Data Kecamatan</p>
    <a href="/kecamatan/create" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Kode</th>
            <th scope="col">Nama Kecamatan</th>
            <th scope="col">Active</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $kecamatan)
            <tr>
                <td>{{ $kecamatan->kode }}</td>
                <td>{{ $kecamatan->nama_kecamatan }}</td>
                <td>{{ $kecamatan->is_active == 1 ? 'Aktif' : 'Tidak Aktif' }}</td>
                <td>
                    <a href="/kecamatan/<?= $kecamatan->kode ?>/edit" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/kecamatan/<?= $kecamatan->kode ?>" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
