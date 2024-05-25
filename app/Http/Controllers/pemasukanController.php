<?php

namespace App\Http\Controllers;
use App\Models\pemasukan;
use Illuminate\Http\Request;

class pemasukanController extends Controller
{
    public function index()
    {
        $pemasukan = pemasukan::all();
        return view('pemasukan.pemasukan', compact('pemasukan'));
    }

    public function create()
    {
        return view('pemasukan.pemasukan-entry');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_pemasukan' => 'required',
            'id_pegawai' => 'required',
            'id_penjualan' => 'required',
            'uang_masuk' => 'required',
        ]);

        

        pemasukan::create([
            'id_pemasukan' => $request->id_pemasukan,
            'id_pegawai' => $request->id_pegawai,
            'id_penjualan' => $request->id_penjualan,
            'uang_masuk' => $request->uang_masuk,
        ]);

        return redirect('/pemasukan');
    }

    public function edit($id_pemasukan)
    {
        $pemasukan = pemasukan::find($id_pemasukan);
        return view('pemasukan.pemasukan-edit', compact('pemasukan'));
    }

    public function update(Request $request, $id_pemasukan)
    {
        $this->validate($request, [
            'id_pemasukan' => 'required',
            'id_pegawai' => 'required',
            'id_penjualan' => 'required',
            'uang_masuk' => 'required',
        ]);

        $pemasukan = pemasukan::find($id_pemasukan);

        

        $pemasukan->update([
            'id_pemasukan' => $request->id_pemasukan,
            'id_pegawai' => $request->id_pegawai,
            'id_penjualan' => $request->id_penjualan,
            'uang_masuk' => $request->uang_masuk,
        ]);

        return redirect('/pemasukan');
    }

    public function delete($id_pemasukan)
    {
        $pemasukan = pemasukan::find($id_pemasukan);
        return view('pemasukan.pemasukan-hapus', compact('pemasukan'));
    }

    public function destroy($id_pemasukan)
    {
        $pemasukan = pemasukan::find($id_pemasukan);
        $pemasukan->delete();
        return redirect('/pemasukan');
    }
    
}


