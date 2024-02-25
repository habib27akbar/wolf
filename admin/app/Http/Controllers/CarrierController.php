<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrier;

class CarrierController extends Controller
{
    public function index()
    {
        $carrier = Carrier::all();
        //dd($sejarah);
        return view('carrier.index', compact('carrier'));
    }

    public function create()
    {

        return view('carrier.create');
    }

    public function edit($id)
    {
        //$foto = Carrier::all();
        //dd($sejarah);
        $carrier = Carrier::findOrFail($id);

        return view('carrier.edit', compact('carrier'));
    }

    public function show($id)
    {
        //$foto = Carrier::all();
        //dd($sejarah);
        $carrier = Carrier::findOrFail($id);

        return view('carrier.edit', compact('carrier'));
    }

    public function store(Request $request)
    {
        $nama_image = null;
        if ($request->file('image')) {
            $image = $request->file('image');
            $nama_image = 'carrier-' . uniqid() . '-' . $image->getClientOriginalName();
            $dir = 'img/carrier';
            $image->move(public_path($dir), $nama_image);
        }


        $storeData = [
            'judul' => $request->input('judul'),
            'tanggal_posting' => $request->input('tanggal_posting'),
            'isi' => $request->input('isi'),

            //'status' => 1
        ];
        Carrier::create($storeData);
        return redirect('carrier')->with('alert-success', 'Success Tambah Data');
    }

    public function update(Request $request, $id)
    {
        $nama_image = $request->input('gambar_old');
        if ($request->file('image')) {
            $image = $request->file('image');
            $nama_image = 'carrier-' . uniqid() . '-' . $image->getClientOriginalName();
            $dir = 'img/carrier';
            $image->move(public_path($dir), $nama_image);
        }
        $updateDate = [
            'judul' => $request->input('judul'),
            'tanggal_posting' => $request->input('tanggal_posting'),
            'isi' => $request->input('isi'),


        ];
        Carrier::where('id', $id)->update($updateDate);
        return redirect('carrier')->with('alert-success', 'Success Update Data');
    }

    public function destroy($id)
    {
        Carrier::findOrFail($id)->delete();
        return redirect('carrier')->with('alert-success', 'Success deleted data');
    }
}
