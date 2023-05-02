@extends('layout.main')
@extends('layout.navbar')
@section('content')
<div class="container">
    <a href="/provinsi" class="btn btn-sm btn-outline-primary">Back</a>
    @if(isset($provinsi->kode))
    <form action="/provinsi/P<?= $provinsi->kode ?>/edit" method="post">
    @else
    <form action="/provinsi/create" method="post">
    @endif
        @csrf
        <div class="mb-3">
            <label for="kode" class="form-label">Kode Provinsi</label>
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">P</span>
                <input type="text" class="form-control" id="kode" name="kode" value="<?= $provinsi->kode ?>">
            </div>
        </div>
        <div class="mb-3">
            <label for="nama_provinsi" class="form-label">Nama Provinsi</label>
            <input type="text" class="form-control" id="nama_provinsi" name="nama_provinsi" value="<?= $provinsi->nama_provinsi ?>">
        </div>
        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" value="" id="is_active" name="is_active" <?= $provinsi->is_active == 1 ? 'checked' : '' ?>>
            <label class="form-check-label" for="is_active">
                Active
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
