<?php

namespace App\Http\Controllers;

use App\Mail\ContactMailer;
use App\Mail\ProductMailer;
use Illuminate\Support\Facades\Mail;
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
        $products = Product::orderBy('name')->paginate(20);
        return view('public.pages.shop', ['pro_ducts' => $products]);
    }

    public function productByCategory($id)
    {
        $products = Product::where('category_id', $id)->orderBy('name')->paginate(20);
        return view('public.pages.shop', ['pro_ducts' => $products]);
    }

    public function productByCompany($id)
    {
        $products = Product::where('company_id', $id)->orderBy('name')->paginate(20);
        return view('public.pages.shop', ['pro_ducts' => $products]);
    }

    public function singleProduct($id)
    {
        $product = Product::where('id', $id)->firstOrFail();
        $recommendations = Product::where('category_id', $product->category_id)->orderBy('created_at','desc')->paginate(10);
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
        $name = $request->name;
        $email = $request->email;
        $contact = $request->contact;
        $message = $request->message;

        Mail::to('prodyutdatta@gmail.com')->send(new ContactMailer($name, $email, $contact, $message));
        return back();

    }
}
