<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index()
    {
        $company = Company::all();
        //dd($sejarah);
        return view('company.index', compact('company'));
    }

    public function create()
    {

        return view('company.create');
    }

    public function edit($id)
    {
        //$foto = Company::all();
        //dd($sejarah);
        $company = Company::findOrFail($id);

        return view('company.edit', compact('company'));
    }

    public function show($id)
    {
        //$foto = Company::all();
        //dd($sejarah);
        $company = Company::findOrFail($id);

        return view('company.edit', compact('company'));
    }

    public function store(Request $request)
    {

        $image = $request->file('image');
        $nama_image = 'company-' . uniqid() . '-' . $image->getClientOriginalName();
        $dir = 'img/company';
        $image->move(public_path($dir), $nama_image);
        //ddd($image);
        //$image = $request->file('image')->store('images');
        $storeData = [

            'gambar' => $nama_image,
            //'status' => 1
        ];
        Company::create($storeData);
        return redirect('company')->with('alert-success', 'Success Tambah Data');
    }

    public function update(Request $request, $id)
    {
        $image = $request->file('image');
        $nama_image = 'company-' . uniqid() . '-' . $image->getClientOriginalName();
        $dir = 'img/company';
        $image->move(public_path($dir), $nama_image);
        $updateDate = [

            'gambar' => $nama_image,

        ];
        Company::where('id', $id)->update($updateDate);
        return redirect('company')->with('alert-success', 'Success Update Data');
    }

    public function destroy($id)
    {
        Company::findOrFail($id)->delete();
        return redirect('company')->with('alert-success', 'Success deleted data');
    }
}
