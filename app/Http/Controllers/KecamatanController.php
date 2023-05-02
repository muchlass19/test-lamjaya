<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kecamatan;

class KecamatanController extends Controller
{
    public function index() {
        return view('kecamatan.list', [
            'data' => Kecamatan::all()
        ]);
    }

    public function createView() {
        $kecamatan = new Kecamatan();
        return view('kecamatan.form')->with('kecamatan', $kecamatan);
    }

    public function addKecamatan(Request $request) {
        $request->validate([
            'kode' => 'required',
            'nama_kecamatan' => 'required',
        ]);

        $request['kode'] = 'K'.$request['kode'];
        $request['is_active'] = $request->has('is_active');

        Kecamatan::create($request->except(['_token']));
        return redirect('/kecamatan');
    }

    public function editView($id) {
        $kecamatan = Kecamatan::where('kode', $id)->first();
        $kode = substr($kecamatan->kode, 1, null);
        $kecamatan->kode = $kode;
        return view('kecamatan.form')->with('kecamatan', $kecamatan);
    }

    public function update(Request $request, $id) {
        // dd($kecamatan);
        // $kecamatan->update($request->validate());
        $kecamatan = Kecamatan::where('kode', $id);
        $request->validate([
            'kode' => 'required',
            'nama_kecamatan' => 'required',
        ]);

        $request['kode'] = 'K'.$request['kode'];
        $request['is_active'] = $request->has('is_active');

        $kecamatan->update($request->except(['_token']));
        return redirect('/kecamatan');
    }

    public function delete($id) {
        Kecamatan::where('kode', $id)->delete();
        return redirect('/kecamatan');
    }
}
