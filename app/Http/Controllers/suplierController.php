<?php

namespace App\Http\Controllers;

use App\Models\suplier;
use File;
use Illuminate\Http\Request;

class suplierController extends Controller
{
    public function index()
    {
        $suplier = suplier::all();
        return view('suplier.suplier', compact('suplier'));
    }

    public function create()
    {
        return view('suplier.suplier-entry');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_suplier' => 'required',
            'nama_suplier' => 'required',
            'no.telpon' => 'required',
            'perusahaan' => 'required',
        ]);

        

        suplier::create([
            'id_suplier' => $request->id_suplier,
            'nama_suplier' => $request->nama_suplier,
            'no.telpon' => $request ->no_telpon,
            'perusahaan' => $request ->perusahaan,
        ]);

        return redirect('/suplier');
    }

    public function edit($id_suplier)
    {
        $suplier = suplier::find($id_suplier);
        return view('suplier.suplier-edit', compact('suplier'));
    }

    public function update(Request $request, $id_suplier)
    {
        $this->validate($request, [
            'id_suplier' => 'required',
            'nama_suplier' => 'required',
            'no.telpon' => 'required',
            'perusahaan' => 'required',
        ]);

        $suplier = suplier::find($id_suplier);

        

        $suplier->update([
            'id_suplier' => $request->id_suplier,
            'nama_suplier' => $request->nama_suplier,
            'no.telpon' => $request ->no_telpon,
            'perusahaan' => $request ->perusahaan,
        ]);

        return redirect('/suplier');
    }

    public function delete($id_suplier)
    {
        $suplier = suplier::find($id_suplier);
        return view('suplier.suplier-hapus', compact('suplier'));
    }

    public function destroy($id_suplier)
    {
        $suplier = suplier::find($id_suplier);
        $suplier->delete();
        return redirect('/suplier');
    }
}
