<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        //dd($sejarah);
        return view('news.index', compact('news'));
    }

    public function create()
    {

        return view('news.create');
    }

    public function edit($id)
    {
        //$foto = News::all();
        //dd($sejarah);
        $news = News::findOrFail($id);

        return view('news.edit', compact('news'));
    }

    public function show($id)
    {
        //$foto = News::all();
        //dd($sejarah);
        $news = News::findOrFail($id);

        return view('news.edit', compact('news'));
    }

    public function store(Request $request)
    {
        $nama_image = null;
        if ($request->file('image')) {
            $image = $request->file('image');
            $nama_image = 'news-' . uniqid() . '-' . $image->getClientOriginalName();
            $dir = 'img/news';
            $image->move(public_path($dir), $nama_image);
        }


        $storeData = [
            'judul' => $request->input('judul'),
            'tanggal_posting' => $request->input('tanggal_posting'),
            'isi' => $request->input('isi'),
            'gambar' => $nama_image,
            //'status' => 1
        ];
        News::create($storeData);
        return redirect('news')->with('alert-success', 'Success Tambah Data');
    }

    public function update(Request $request, $id)
    {
        $nama_image = $request->input('gambar_old');
        if ($request->file('image')) {
            $image = $request->file('image');
            $nama_image = 'news-' . uniqid() . '-' . $image->getClientOriginalName();
            $dir = 'img/news';
            $image->move(public_path($dir), $nama_image);
        }
        $updateDate = [
            'judul' => $request->input('judul'),
            'tanggal_posting' => $request->input('tanggal_posting'),
            'isi' => $request->input('isi'),
            'gambar' => $nama_image,

        ];
        News::where('id', $id)->update($updateDate);
        return redirect('news')->with('alert-success', 'Success Update Data');
    }

    public function destroy($id)
    {
        News::findOrFail($id)->delete();
        return redirect('news')->with('alert-success', 'Success deleted data');
    }
}
