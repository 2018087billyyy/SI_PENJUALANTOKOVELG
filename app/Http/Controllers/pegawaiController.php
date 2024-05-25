<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use File;
use Illuminate\Http\Request;

class pegawaiController extends Controller
{
    public function index()
    {
        $pegawai = pegawai::all();
        return view('pegawai.pegawai', compact('pegawai'));
    }

    public function create()
    {
        return view('pegawai.pegawai-entry');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_pegawai' => 'required',
            'nama_pegawai' => 'required',
            'alamat' => 'required',
            'no_telpon' => 'required',
        ]);

        

        pegawai::create([
            'id_pegawai' => $request->id_pegawai,
            'nama_pegawai' => $request->nama_pegawai,
            'alamat' => $request ->alamat,
            'no_telp' => $request ->no_telpon,
        ]);

        return redirect('/pegawai');
    }

    public function edit($id_pegawai)
    {
        $pegawai = pegawai::find($id_pegawai);
        return view('pegawai.pegawai-edit', compact('pegawai'));
    }

    public function update(Request $request, $id_pegawai)
    {
        $this->validate($request, [
            'id_pegawai' => 'required',
            'nama_pegawai' => 'required',
            'alamat' => 'required',
            'no_telpon' => 'required',
        ]);

        $pegawai = pegawai::find($id_pegawai);

        

        $pegawai->update([
            'id_pegawai' => $request->id_pegawai,
            'nama_pegawai' => $request->nama_pegawai,
            'alamat' => $request ->alamat,
            'no_telp' => $request ->no_telpon,
        ]);

        return redirect('/pegawai');
    }

    public function delete($id_pegawai)
    {
        $pegawai = pegawai::find($id_pegawai);
        return view('pegawai.pegawai-hapus', compact('pegawai'));
    }

    public function destroy($id_pegawai)
    {
        $pegawai = pegawai::find($id_pegawai);
        $pegawai->delete();
        return redirect('/pegawai');
    }
}
