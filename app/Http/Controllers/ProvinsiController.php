<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provinsi;

class ProvinsiController extends Controller
{
    public function index() {
        return view('provinsi.list', [
            'data' => Provinsi::all()
        ]);
    }

    public function createView() {
        $provinsi = new Provinsi();
        return view('provinsi.form')->with('provinsi', $provinsi);
    }

    public function addProvinsi(Request $request) {
        $request->validate([
            'kode' => 'required',
            'nama_provinsi' => 'required',
        ]);

        $request['kode'] = 'P'.$request['kode'];
        $request['is_active'] = $request->has('is_active');

        Provinsi::create($request->all());
        return redirect('/provinsi');
    }

    public function editView($id) {
        $provinsi = Provinsi::where('kode', $id)->first();
        $kode = substr($provinsi->kode, 1, null);
        $provinsi->kode = $kode;
        return view('provinsi.form')->with('provinsi', $provinsi);
    }

    public function update(Request $request, $id) {
        // dd($provinsi);
        // $provinsi->update($request->validate());
        $provinsi = Provinsi::where('kode', $id);
        $request->validate([
            'kode' => 'required',
            'nama_provinsi' => 'required',
        ]);

        $request['kode'] = 'P'.$request['kode'];
        $request['is_active'] = $request->has('is_active');

        $provinsi->update($request->except(['_token']));
        return redirect('/provinsi');
    }

    public function delete($id) {
        Provinsi::where('kode', $id)->delete();
        return redirect('/provinsi');
    }
}
