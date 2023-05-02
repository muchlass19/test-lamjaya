@extends('layout.main')
@extends('layout.navbar')
@section('content')
<div class="container">
    <a href="/kelurahan" class="btn btn-sm btn-outline-primary">Back</a>
    @if(isset($kelurahan->kode))
    <form action="/kelurahan/L<?= $kelurahan->kode ?>/edit" method="post">
    @else
    <form action="/kelurahan/create" method="post">
    @endif
        @csrf
        <div class="mb-3">
            <label for="kode" class="form-label">Kode Kelurahan</label>
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">L</span>
                <input type="text" class="form-control" id="kode" name="kode" value="<?= $kelurahan->kode ?>">
            </div>
        </div>
        <div class="mb-3">
            <label for="nama_kelurahan" class="form-label">Nama kelurahan</label>
            <input type="text" class="form-control" id="nama_kelurahan" name="nama_kelurahan" value="<?= $kelurahan->nama_kelurahan ?>">
        </div>
        <div class="mb-3">
            <label for="nama_kecamatan">Nama Kecamatan</label>
            <select class="form-select" aria-label="Default select example" id="nama_kecamatan" name="kecamatan_id">
                @foreach($kecamatan as $kec)
                <option <?= $kec->kode == $kelurahan->kecamatan_id ? 'selected' : '' ?> value="<?= $kec->kode ?>">{{ $kec->nama_kecamatan }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" value="" id="is_active" name="is_active" <?= $kelurahan->is_active == 1 ? 'checked' : '' ?>>
            <label class="form-check-label" for="is_active">
                Active
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
