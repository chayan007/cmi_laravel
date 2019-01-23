<?php

namespace App\Http\Controllers;

use App\Product;
use function GuzzleHttp\Psr7\str;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->company_id = $request->company;
        $product->category_id = $request->category;
        $randomName = str_random(8).' '.$product->name;
        $product->slug = str_slug($randomName, '_');
        if ($request->hasFile('img_1'))
        {
            $file = $request->img_1;
            $path = $file->store('public/products/images');
            $product->img_1 = $path;
        }
        if ($request->hasFile('img_2'))
        {
            $file = $request->img_2;
            $path = $file->store('public/products/images');
            $product->img_2 = $path;
        }
        if ($request->hasFile('img_3'))
        {
            $file = $request->img_3;
            $path = $file->store('public/products/images');
            $product->img_3 = $path;
        }
        if ($request->hasFile('brochure'))
        {
            $file = $request->brochure;
            $path = $file->store('public/products/brochures');
            $product->brochure = $path;
        }
        $product->save();
        return back()->with('status', 'Product has been saved !');
    }

    public function updateProduct(Request $request, $id)
    {
        $product = Product::where('id', $id)->firstOrFail();

        if ($request->has('name'))
        {
            $product->name = $request->name;
        }
        if ($request->has('price'))
        {
            $product->price = $request->price;
        }
        if ($request->has('description'))
        {
            $product->description = $request->description;
        }
        if ($request->has('company_id'))
        {
            $product->company_id = $request->company_id;
        }
        if ($request->has('category_id'))
        {
            $product->category_id = $request->category_id;
        }
        if ($request->hasFile('img_1'))
        {
            $file = $request->img_1;
            $path = $file->store('public/products/images');
            $product->img_1 = $path;
        }
        if ($request->hasFile('img_2'))
        {
            $file = $request->img_2;
            $path = $file->store('public/products/images');
            $product->img_2 = $path;
        }
        if ($request->hasFile('img_3'))
        {
            $file = $request->img_3;
            $path = $file->store('public/products/images');
            $product->img_3 = $path;
        }
        if ($request->hasFile('brochure'))
        {
            $file = $request->brochure;
            $path = $file->store('public/products/brochures');
            $product->brochure = $path;
        }

        $product->save();
        return back()->with('status', 'Product has been updated !');
    }

    public function deleteProduct($id)
    {
        $product = Product::where('id', $id)->firstOrFail();
        $product->delete();
        return back()->with('status', 'Product has been deleted !');
    }

    public function show()
    {
        return view('admin.addProduct');
    }

    public function getProduct()
    {
        $products = Product::orderBy('created_at', 'desc')->simplePaginate(20);
        return view('admin.Products', ['pro_ducts' => $products]);
    }

    public function singleProduct($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('public.pages.single', ['product' => $product]);
    }

}
