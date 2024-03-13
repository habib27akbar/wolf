<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\ProductImage;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        //dd($sejarah);
        return view('product.index', compact('product'));
    }

    public function create()
    {

        return view('product.create');
    }

    public function edit($id)
    {
        //$foto = Production::all();
        //dd($sejarah);
        $product = Product::findOrFail($id);

        return view('product.edit', compact('product'));
    }

    public function show($id)
    {
        //$foto = Production::all();
        //dd($sejarah);
        $product = Product::findOrFail($id);
        $product_detail = ProductDetail::where('product_id', $id)->get();
        $product_image = ProductImage::where('product_id', $id)->get();

        return view('product.view', compact('product', 'product_detail', 'product_image'));
    }

    public function store(Request $request)
    {

        $image = $request->file('image');
        $nama_image = 'product-' . uniqid() . '-' . $image->getClientOriginalName();
        $dir = 'img/product';
        $image->move(public_path($dir), $nama_image);
        //ddd($image);
        //$image = $request->file('image')->store('images');
        $storeData = [
            'product_name' => $request->input('product_name'),
            'model' => $request->input('model'),
            'size' => $request->input('size'),
            'lumens' => $request->input('lumens'),
            'power' => $request->input('power'),
            'spec' => $request->input('spec'),
            'color_temp' => $request->input('color_temp'),
            'cri' => $request->input('cri'),
            'driver' => $request->input('driver'),
            'quality_warranty' => $request->input('quality_warranty'),
            'gambar' => $nama_image,
            //'status' => 1
        ];
        Product::create($storeData);
        return redirect('product')->with('alert-success', 'Success Tambah Data');
    }

    public function update(Request $request, $id)
    {

        if (!$request->file('image')) {
            $nama_image = $request->input('gambar_old');
        } else {
            $image = $request->file('image');
            $nama_image = 'product-' . uniqid() . '-' . $image->getClientOriginalName();
            $dir = 'img/product';
            $image->move(public_path($dir), $nama_image);
        }
        $updateData = [
            'product_name' => $request->input('product_name'),
            'model' => $request->input('model'),
            'size' => $request->input('size'),
            'lumens' => $request->input('lumens'),
            'power' => $request->input('power'),
            'spec' => $request->input('spec'),
            'color_temp' => $request->input('color_temp'),
            'cri' => $request->input('cri'),
            'driver' => $request->input('driver'),
            'quality_warranty' => $request->input('quality_warranty'),
            'gambar' => $nama_image,

        ];
        Product::where('id', $id)->update($updateData);
        return redirect('product')->with('alert-success', 'Success Update Data');
    }

    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return redirect('product')->with('alert-success', 'Success deleted data');
    }
}
