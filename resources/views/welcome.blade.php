@extends('layout.main')
@extends('layout.navbar')

@section('content')
<div class="container">
    <p class="fw-bold text-secondary py-3 border-bottom">Data Pegawai</p>
    <a href="/pegawai/create" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Nama Pegawai</th>
            <th scope="col">Tempat Lahir</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Agama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Kelurahan</th>
            <th scope="col">Kecamatan</th>
            <th scope="col">Provinsi</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $pegawai)
            <tr>
                <td>{{ $pegawai->nama_pegawai }}</td>
                <td>{{ $pegawai->tempat_lahir }}</td>
                <td>{{ $pegawai->tanggal_lahir }}</td>
                <td>{{ $pegawai->jenis_kelamin }}</td>
                <td>{{ $pegawai->agama }}</td>
                <td>{{ $pegawai->alamat }}</td>
                <td>{{ $pegawai->kelurahan->nama_kelurahan }}</td>
                <td>{{ $pegawai->kecamatan->nama_kecamatan }}</td>
                <td>{{ $pegawai->provinsi->nama_provinsi }}</td>
                <td>
                    <a href="/pegawai/<?= $pegawai->id ?>/edit" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/pegawai/<?= $pegawai->id ?>" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
