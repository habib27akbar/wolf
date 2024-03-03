<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Certificate;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Production;
use App\Models\Katalog;
use App\Models\News;

class NewsController extends Controller
{

    public function index()
    {
        $slider = Slider::all();
        $contact = Contact::all();
        $certificate = Certificate::all();
        $production = Production::all();
        $product = Product::all();
        $company = Company::all();
        $about = About::all();
        $katalog = Katalog::all();
        $news = News::all();

        return view('news.index', compact('slider', 'contact', 'certificate', 'production', 'product', 'company', 'about', 'katalog', 'news'));
    }

    public function show($id)
    {
        $slider = Slider::all();
        $contact = Contact::all();
        $certificate = Certificate::all();
        $production = Production::all();
        $product = Product::all();
        $company = Company::all();
        $about = About::all();
        $katalog = Katalog::all();
        $news = News::findOrFail($id);
        //$product_id = Product::findOrFail($id);
        return view('news.show', compact('slider', 'contact', 'certificate', 'production', 'product', 'company', 'about', 'katalog', 'news'));
    }
}
