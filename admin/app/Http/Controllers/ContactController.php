<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::findOrFail(1);
        //dd($sejarah);
        return view('contact.index', compact('contact'));
    }


    public function update(Request $request, $id)
    {

        Contact::where('id', $id)->update($request->except(['_token', '_method']));
        return redirect('contact')->with('alert-success', 'Success Update Data');
    }
}
