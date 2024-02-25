<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Katalog;

class KatalogController extends Controller
{
    public function index()
    {
        $katalog = Katalog::findOrFail(1);
        //dd($sejarah);
        return view('katalog.index', compact('katalog'));
    }


    public function update(Request $request, $id)
    {
        $image = $request->file('image');
        $nama_image = 'katalog-' . uniqid() . '-' . $image->getClientOriginalName();
        $dir = 'img/katalog';
        $image->move(public_path($dir), $nama_image);
        $updateDate = [

            'katalog' => $nama_image,

        ];
        Katalog::where('id', $id)->update($updateDate);
        //Contact::where('id', $id)->update($request->except(['_token', '_method']));
        return redirect('katalog')->with('alert-success', 'Success Update Data');
    }
}
