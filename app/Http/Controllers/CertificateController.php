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

class CertificateController extends Controller
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

        return view('about_us.certificate.index', compact('slider', 'contact', 'certificate', 'production', 'product', 'company', 'about', 'katalog'));
    }
}
