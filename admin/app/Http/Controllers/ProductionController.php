<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Production;

class ProductionController extends Controller
{
    public function index()
    {
        $production = Production::all();
        //dd($sejarah);
        return view('production.index', compact('production'));
    }

    public function create()
    {

        return view('production.create');
    }

    public function edit($id)
    {
        //$foto = Production::all();
        //dd($sejarah);
        $production = Production::findOrFail($id);

        return view('production.edit', compact('production'));
    }

    public function show($id)
    {
        //$foto = Production::all();
        //dd($sejarah);
        $production = Production::findOrFail($id);

        return view('production.edit', compact('production'));
    }

    public function store(Request $request)
    {

        $image = $request->file('image');
        $nama_image = 'production-' . uniqid() . '-' . $image->getClientOriginalName();
        $dir = 'img/production';
        $image->move(public_path($dir), $nama_image);
        //ddd($image);
        //$image = $request->file('image')->store('images');
        $storeData = [

            'gambar' => $nama_image,
            //'status' => 1
        ];
        Production::create($storeData);
        return redirect('production')->with('alert-success', 'Success Tambah Data');
    }

    public function update(Request $request, $id)
    {
        $image = $request->file('image');
        $nama_image = 'production-' . uniqid() . '-' . $image->getClientOriginalName();
        $dir = 'img/production';
        $image->move(public_path($dir), $nama_image);
        $updateDate = [

            'gambar' => $nama_image,

        ];
        Production::where('id', $id)->update($updateDate);
        return redirect('production')->with('alert-success', 'Success Update Data');
    }

    public function destroy($id)
    {
        Production::findOrFail($id)->delete();
        return redirect('production')->with('alert-success', 'Success deleted data');
    }
}
