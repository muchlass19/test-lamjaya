@extends('layout.main')
@extends('layout.navbar')
@section('content')
<div class="container">
    <a href="/kecamatan" class="btn btn-sm btn-outline-primary">Back</a>
    @if(isset($kecamatan->kode))
    <form action="/kecamatan/K<?= $kecamatan->kode ?>/edit" method="post">
    @else
    <form action="/kecamatan/create" method="post">
    @endif
        @csrf
        <div class="mb-3">
            <label for="kode" class="form-label">Kode Kecamatan</label>
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">K</span>
                <input type="text" class="form-control" id="kode" name="kode" value="<?= $kecamatan->kode ?>">
            </div>
        </div>
        <div class="mb-3">
            <label for="nama_kecamatan" class="form-label">Nama kecamatan</label>
            <input type="text" class="form-control" id="nama_kecamatan" name="nama_kecamatan" value="<?= $kecamatan->nama_kecamatan ?>">
        </div>
        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" value="" id="is_active" name="is_active" <?= $kecamatan->is_active == 1 ? 'checked' : '' ?>>
            <label class="form-check-label" for="is_active">
                Active
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
