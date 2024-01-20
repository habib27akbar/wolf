<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    public function index()
    {
        $slider = Slider::all();
        //dd($sejarah);
        return view('slider.index', compact('slider'));
    }

    public function create()
    {

        return view('slider.create');
    }

    public function edit($id)
    {
        //$foto = Slider::all();
        //dd($sejarah);
        $slider = Slider::findOrFail($id);

        return view('slider.edit', compact('slider'));
    }

    public function show($id)
    {
        //$foto = Slider::all();
        //dd($sejarah);
        $slider = Slider::findOrFail($id);

        return view('slider.edit', compact('slider'));
    }

    public function store(Request $request)
    {

        $image = $request->file('image');
        $nama_image = 'Slider-' . uniqid() . '-' . $image->getClientOriginalName();
        $dir = 'img/slider';
        $image->move(public_path($dir), $nama_image);
        //ddd($image);
        //$image = $request->file('image')->store('images');
        $storeData = [

            'gambar' => $nama_image,
            //'status' => 1
        ];
        Slider::create($storeData);
        return redirect('slider')->with('alert-success', 'Success Tambah Data');
    }

    public function update(Request $request, $id)
    {
        $image = $request->file('image');
        $nama_image = 'Slider-' . uniqid() . '-' . $image->getClientOriginalName();
        $dir = 'img/slider';
        $image->move(public_path($dir), $nama_image);
        $updateDate = [

            'gambar' => $nama_image,

        ];
        Slider::where('id', $id)->update($updateDate);
        return redirect('slider')->with('alert-success', 'Success Update Data');
    }

    public function destroy($id)
    {
        Slider::findOrFail($id)->delete();
        return redirect('slider')->with('alert-success', 'Success deleted data');
    }
}
