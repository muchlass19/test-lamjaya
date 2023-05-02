<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Provinsi;
use App\Models\Kecamatan;
use App\Models\Kelurahan;

class PegawaiController extends Controller
{
    public function index() {
        return view('welcome', [
            'data' => Pegawai::all()
        ]);
    }

    public function createView() {
        $pegawai = new Pegawai();
        $provinsi = Provinsi::all();
        $kecamatan = Kecamatan::all();
        $kelurahan = Kelurahan::all();
        return view('pegawai.form', [
            'pegawai' => $pegawai,
            'kelurahan' => $kelurahan,
            'kecamatan' => $kecamatan,
            'provinsi' => $provinsi
        ]);
    }

    public function addPegawai(Request $request) {
        $request->validate([
            'nama_pegawai',
            'tempat_lahir',
            'tanggal_lahir',
            'alamat'
        ]);
        Pegawai::create($request->except(['_token']));
        return redirect('/');
    }

    public function editView($id) {
        $pegawai = Pegawai::where('id', $id)->first();
        $provinsi = Provinsi::all();
        $kecamatan = Kecamatan::all();
        $kelurahan = Kelurahan::all();
        return view('pegawai.form', [
            'pegawai' => $pegawai,
            'provinsi' => $provinsi,
            'kelurahan' => $kelurahan,
            'kecamatan' => $kecamatan
        ]);
    }

    public function update(Request $request, $id) {
        // dd($provinsi);
        // $provinsi->update($request->validate());
        $pegawai = Pegawai::where('id', $id);
        $request->validate([
            'nama_pegawai',
            'tempat_lahir',
            'tanggal_lahir',
            'alamat'
        ]);

        $pegawai->update($request->except(['_token']));
        return redirect('/');
    }

    public function delete($id) {
        Pegawai::where('id', $id)->delete();
        return redirect('/');
    }
}
