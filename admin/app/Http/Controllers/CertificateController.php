<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificate;

class CertificateController extends Controller
{
    public function index()
    {
        $certificate = Certificate::all();
        //dd($sejarah);
        return view('certificate.index', compact('certificate'));
    }

    public function create()
    {

        return view('certificate.create');
    }

    public function edit($id)
    {
        //$foto = Certificate::all();
        //dd($sejarah);
        $certificate = Certificate::findOrFail($id);

        return view('certificate.edit', compact('certificate'));
    }

    public function show($id)
    {
        //$foto = Certificate::all();
        //dd($sejarah);
        $certificate = Certificate::findOrFail($id);

        return view('certificate.edit', compact('certificate'));
    }

    public function store(Request $request)
    {

        $image = $request->file('image');
        $nama_image = 'certificate-' . uniqid() . '-' . $image->getClientOriginalName();
        $dir = 'img/certificate';
        $image->move(public_path($dir), $nama_image);
        //ddd($image);
        //$image = $request->file('image')->store('images');
        $storeData = [

            'gambar' => $nama_image,
            //'status' => 1
        ];
        Certificate::create($storeData);
        return redirect('certificate')->with('alert-success', 'Success Tambah Data');
    }

    public function update(Request $request, $id)
    {
        $image = $request->file('image');
        $nama_image = 'certificate-' . uniqid() . '-' . $image->getClientOriginalName();
        $dir = 'img/certificate';
        $image->move(public_path($dir), $nama_image);
        $updateDate = [

            'gambar' => $nama_image,

        ];
        Certificate::where('id', $id)->update($updateDate);
        return redirect('certificate')->with('alert-success', 'Success Update Data');
    }

    public function destroy($id)
    {
        Certificate::findOrFail($id)->delete();
        return redirect('certificate')->with('alert-success', 'Success deleted data');
    }
}
