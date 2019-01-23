<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }

    public function products()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(20);
        return view('shop', ['pro_ducts' => $products]);
    }

    public function productByCategory($id)
    {
        $products = Product::where('category_id', $id)->orderBy('created_at', 'desc')->paginate(20);
        return view('shop', ['pro_ducts' => $products]);
    }

    public function productByCompany($id)
    {
        $products = Product::where('company_id', $id)->orderBy('created_at', 'desc')->paginate(20);
        return view('shop', ['pro_ducts' => $products]);
    }

    public function singleProduct($id)
    {
        $product = Product::where('id', $id)->firstOrFail();
        $recommendations = Product::where('category_id', $product->category_id)->orderBy('created_at', 'desc')->paginate(10);
        return view('product',[
            'product' => $product,
            'recommendations' => $recommendations,
        ]);
    }

    public function dashboard()
    {
        return view('auth.pages.dashboard');
    }
}
