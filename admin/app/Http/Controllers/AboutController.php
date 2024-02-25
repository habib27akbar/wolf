<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::findOrFail(1);
        //dd($sejarah);
        return view('about.index', compact('about'));
    }


    public function update(Request $request, $id)
    {

        About::where('id', $id)->update($request->except(['_token', '_method']));
        return redirect('about')->with('alert-success', 'Success Update Data');
    }
}
