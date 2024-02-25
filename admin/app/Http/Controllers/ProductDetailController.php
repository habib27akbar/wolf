<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductDetail;

class ProductDetailController extends Controller
{

    public function create()
    {

        return view('product_detail.create');
    }

    public function edit($id)
    {
        //$foto = Production::all();
        //dd($sejarah);
        $product_detail = ProductDetail::findOrFail($id);

        return view('product_detail.edit', compact('product_detail'));
    }

    public function show($id)
    {
        //$foto = Production::all();
        //dd($sejarah);
        $product = ProductDetail::findOrFail($id);

        return view('product_detail.view', compact('product'));
    }

    public function store(Request $request)
    {


        $storeData = [
            'product_id' => $request->input('product_id'),
            'model' => $request->input('model'),
            'size' => $request->input('size'),
            'lumens' => $request->input('lumens'),
            'power' => $request->input('power'),
            'led_chip' => $request->input('led_chip'),
            'input_voltage' => $request->input('input_voltage'),
            'spec' => $request->input('spec'),
            'color_temp' => $request->input('color_temp'),
            'cri' => $request->input('cri'),
            'driver' => $request->input('driver'),
            'quality_warranty' => $request->input('quality_warranty'),

        ];
        ProductDetail::create($storeData);
        return redirect('product/' . $request->input('product_id'))->with('alert-success', 'Success Tambah Data');
    }

    public function update(Request $request, $id)
    {


        $updateData = [
            'product_id' => $request->input('product_id'),
            'model' => $request->input('model'),
            'size' => $request->input('size'),
            'lumens' => $request->input('lumens'),
            'power' => $request->input('power'),
            'led_chip' => $request->input('led_chip'),
            'input_voltage' => $request->input('input_voltage'),
            'spec' => $request->input('spec'),
            'color_temp' => $request->input('color_temp'),
            'cri' => $request->input('cri'),
            'driver' => $request->input('driver'),
            'quality_warranty' => $request->input('quality_warranty'),


        ];
        ProductDetail::where('id', $id)->update($updateData);
        return redirect('product/' . $request->input('product_id'))->with('alert-success', 'Success Update Data');
    }

    public function destroy(Request $request, $id)
    {
        ProductDetail::findOrFail($id)->delete();
        return redirect('product/' . $request->input('product_id'))->with('alert-success', 'Success deleted data');
    }
}
