<?php

namespace App\Http\Controllers;

use App\Models\customer;
use File;
use Illuminate\Http\Request;

class customerController extends Controller
{
    public function index()
    {
        $customer = customer::all();
        return view('customer.customer', compact('customer'));
    }

    public function create()
    {
        return view('customer.customer-entry');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_customer' => 'required',
            'nama_customer' => 'required',
            'alamat' => 'required',
            'no_telpon' => 'required',
        ]);

        

        customer::create([
            'id_customer' => $request->id_customer,
            'nama_customer' => $request->nama_customer,
            'alamat' => $request ->alamat,
            'no_telpon' => $request ->no_telpon,
        ]);

        return redirect('/customer');
    }

    public function edit($id_customer)
    {
        $customer = customer::find($id_customer);
        return view('customer.customer-edit', compact('customer'));
    }

    public function update(Request $request, $id_customer)
    {
        $this->validate($request, [
            'id_customer' => 'required',
            'nama_customer' => 'required',
            'alamat' => 'required',
            'no_telpon' => 'required',
        ]);

        $customer = customer::find($id_customer);

        

        $customer->update([
            'id_customer' => $request->id_customer,
            'nama_customer' => $request->nama_customer,
            'alamat' => $request->alamat,
            'no_telpon' => $request->no_telpon,
        ]);

        return redirect('/customer');
    }

    public function delete($id_customer)
    {
        $customer = customer::find($id_customer);
        return view('customer.customer-hapus', compact('customer'));
    }

    public function destroy($id_customer)
    {
        $customer = customer::find($id_customer);
        $customer->delete();
        return redirect('/customer');
    }
}
