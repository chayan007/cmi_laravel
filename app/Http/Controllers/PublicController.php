<?php

namespace App\Http\Controllers;

use App\Mail\ProductMailer;
use App\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home()
    {
        return view('public.pages.home');
    }

    public function contact()
    {
        return view('public.pages.contact');
    }

    public function products()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(20);
        return view('public.pages.shop', ['pro_ducts' => $products]);
    }

    public function productByCategory($id)
    {
        $products = Product::where('category_id', $id)->orderBy('created_at', 'desc')->paginate(20);
        return view('public.pages.shop', ['pro_ducts' => $products]);
    }

    public function productByCompany($id)
    {
        $products = Product::where('company_id', $id)->orderBy('created_at', 'desc')->paginate(20);
        return view('public.pages.shop', ['pro_ducts' => $products]);
    }

    public function singleProduct($id)
    {
        $product = Product::where('id', $id)->firstOrFail();
        $recommendations = Product::where('category_id', $product->category_id)->orderBy('created_at', 'desc')->paginate(10);
        return view('public.pages.product',[
            'product' => $product,
            'recommendations' => $recommendations,
        ]);
    }

    public function dashboard()
    {
        return view('auth.pages.dashboard');
    }

    public function productLead(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $contact = $request->contact;
        $product = $request->product;

        Mail::to('prodyutdatta@gmail.com')->send(new ProductMailer($name, $email, $contact, $product));

        return back();
    }

    public function contactLead(Request $request)
    {

    }
}
