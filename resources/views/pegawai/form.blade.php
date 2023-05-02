@extends('layout.main')
@extends('layout.navbar')
@section('content')
<div class="container">
    <a href="/" class="btn btn-sm btn-outline-primary">Back</a>
    @if(isset($pegawai->id))
    <form action="/pegawai/<?= $pegawai->id ?>/edit" method="post">
    @else
    <form action="/pegawai/create" method="post">
    @endif
        @csrf
        <div class="mb-3">
            <label for="nama_pegawai" class="form-label">Nama Pegawai</label>
            <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" value="<?= $pegawai->nama_pegawai ?>">
        </div>
        <div class="mb-3">
            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $pegawai->tempat_lahir ?>">
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input id="tanggal_lahir" name="tanggal_lahir" class="form-control" type="date" value="<?= $pegawai->tanggal_lahir ?>" />
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select class="form-select" aria-label="Default select example" id="jenis_kelamin" name="jenis_kelamin">
                <option selected value="Pria">Pria</option>
                <option <?= $pegawai->jenis_kelamin == 'Wanita' ? 'selected' : '' ?> value="Wanita">Wanita</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="agama">Agama</label>
            <select class="form-select" aria-label="Default select example" id="agama" name="agama">
                <option selected value="Islam">Islam</option>
                <option <?= $pegawai->agama == 'Katolik' ? 'selected' : '' ?> value="Katolik">Katolik</option>
                <option <?= $pegawai->agama == 'Protestan' ? 'selected' : '' ?> value="Protestan">Protestan</option>
                <option <?= $pegawai->agama == 'Hindu' ? 'selected' : '' ?> value="Hindu">Hindu</option>
                <option <?= $pegawai->agama == 'Buddha' ? 'selected' : '' ?> value="Buddha">Buddha</option>
                <option <?= $pegawai->agama == 'Konghuchu' ? 'selected' : '' ?> value="Konghuchu">Konghuchu</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $pegawai->alamat ?>">
        </div>
        <div class="mb-3">
            <label for="nama_provinsi">Nama Provinsi</label>
            <select class="form-select" aria-label="Default select example" id="nama_provinsi" name="provinsi_id">
                @foreach($provinsi as $prov)
                <option <?= $prov->kode == $pegawai->provinsi_id ? 'selected' : '' ?> value="<?= $prov->kode ?>">{{ $prov->nama_provinsi }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="nama_kecamatan">Nama Kecamatan</label>
            <select class="form-select" aria-label="Default select example" id="nama_kecamatan" name="kecamatan_id">
                @foreach($kecamatan as $kec)
                <option <?= $kec->kode == $pegawai->kecamatan_id ? 'selected' : '' ?> value="<?= $kec->kode ?>">{{ $kec->nama_kecamatan }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="nama_kelurahan">Nama Kelurahan</label>
            <select class="form-select" aria-label="Default select example" id="nama_kelurahan" name="kelurahan_id">
                @foreach($kelurahan as $kel)
                <option <?= $kel->kode == $pegawai->kelurahan_id ? 'selected' : '' ?> value="<?= $kel->kode ?>">{{ $kel->nama_kelurahan }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
