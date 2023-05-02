<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelurahan;
use App\Models\Kecamatan;

class KelurahanController extends Controller
{
    public function index() {
        return view('kelurahan.list', [
            'data' => Kelurahan::all()
        ]);
    }

    public function createView() {
        $kelurahan = new Kelurahan();
        $kecamatan = Kecamatan::all();
        return view('kelurahan.form', [
            'kelurahan' => $kelurahan,
            'kecamatan' => $kecamatan
        ]);
    }

    public function addKelurahan(Request $request) {
        $request->validate([
            'kode' => 'required',
            'nama_kelurahan' => 'required',
        ]);

        $request['kode'] = 'L'.$request['kode'];
        $request['is_active'] = $request->has('is_active');

        // dd($request->except('_token'));

        Kelurahan::create($request->except(['_token']));
        return redirect('/kelurahan');
    }

    public function editView($id) {
        $kelurahan = Kelurahan::where('kode', $id)->first();
        $kode = substr($kelurahan->kode, 1, null);
        $kelurahan->kode = $kode;
        $kecamatan = Kecamatan::all();
        return view('kelurahan.form', [
            'kelurahan' => $kelurahan,
            'kecamatan' => $kecamatan
        ]);
    }

    public function update(Request $request, $id) {
        // dd($provinsi);
        // $provinsi->update($request->validate());
        $kelurahan = Kelurahan::where('kode', $id);
        $request->validate([
            'kode' => 'required',
            'nama_kelurahan' => 'required',
        ]);

        $request['kode'] = 'L'.$request['kode'];
        $request['is_active'] = $request->has('is_active');

        $kelurahan->update($request->except(['_token']));
        return redirect('/kelurahan');
    }

    public function delete($id) {
        Kelurahan::where('kode', $id)->delete();
        return redirect('/kelurahan');
    }
}
