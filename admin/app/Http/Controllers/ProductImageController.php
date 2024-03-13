<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductImage;

class ProductImageController extends Controller
{

    public function create()
    {

        return view('product_image.create');
    }


    public function store(Request $request)
    {
        $image = $request->file('image');
        $nama_image = 'product-' . uniqid() . '-' . $image->getClientOriginalName();
        $dir = 'img/product';
        $image->move(public_path($dir), $nama_image);

        $storeData = [
            'product_id' => $request->input('product_id'),
            'gambar' => $nama_image,
        ];
        ProductImage::create($storeData);
        return redirect('product/' . $request->input('product_id'))->with('alert-success', 'Success Tambah Data');
    }



    public function destroy(Request $request, $id)
    {
        ProductImage::findOrFail($id)->delete();
        return redirect('product/' . $request->input('product_id'))->with('alert-success', 'Success deleted data');
    }
}
