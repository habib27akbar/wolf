<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        //dd($sejarah);
        return view('kategori.index', compact('kategori'));
    }

    public function create()
    {

        return view('kategori.create');
    }

    public function edit($id)
    {
        //$foto = kategori::all();
        //dd($sejarah);
        $kategori = Kategori::findOrFail($id);

        return view('kategori.edit', compact('kategori'));
    }

    public function show($id)
    {
        //$foto = kategori::all();
        //dd($sejarah);
        $kategori = Kategori::findOrFail($id);

        return view('kategori.edit', compact('kategori'));
    }

    public function store(Request $request)
    {

        $image = $request->file('image');
        $nama_image = 'kategori-' . uniqid() . '-' . $image->getClientOriginalName();
        $dir = 'img/kategori';
        $image->move(public_path($dir), $nama_image);
        //ddd($image);
        //$image = $request->file('image')->store('images');
        $storeData = [

            'gambar' => $nama_image,
            //'status' => 1
        ];
        Kategori::create($storeData);
        return redirect('kategori')->with('alert-success', 'Success Tambah Data');
    }

    public function update(Request $request, $id)
    {
        $image = $request->file('image');
        $nama_image = 'kategori-' . uniqid() . '-' . $image->getClientOriginalName();
        $dir = 'img/kategori';
        $image->move(public_path($dir), $nama_image);
        $updateDate = [

            'gambar' => $nama_image,

        ];
        Kategori::where('id', $id)->update($updateDate);
        return redirect('kategori')->with('alert-success', 'Success Update Data');
    }

    public function destroy($id)
    {
        Kategori::findOrFail($id)->delete();
        return redirect('kategori')->with('alert-success', 'Success deleted data');
    }
}
