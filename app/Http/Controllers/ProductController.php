<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Certificate;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Contact;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\Production;
use App\Models\Katalog;
use App\Models\ProductImage;

class ProductController extends Controller
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
        return view('about_us.production.index', compact('slider', 'contact', 'certificate', 'production', 'product', 'company', 'about', 'katalog'));
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
        $product_id = Product::findOrFail($id);
        $product_detail = ProductDetail::where('product_id', $id)->get();
        $product_image = ProductImage::where('product_id', $id)->get();
        return view('product.view', compact('slider', 'contact', 'certificate', 'production', 'product', 'company', 'about', 'katalog', 'product_id', 'product_detail', 'product_image'));
    }
}
