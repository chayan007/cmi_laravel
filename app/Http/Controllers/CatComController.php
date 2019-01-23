<?php

namespace App\Http\Controllers;

use App\Category;
use App\Company;
use Illuminate\Http\Request;

class CatComController extends Controller
{
    public function addCategory(Request $request)
    {
        $category = new Category();
        $category->category = $request->category;
        $category->save();
        return back();
    }

    public function addCompany(Request $request)
    {
        $company = new Company();
        $company->company = $request->company;
        $company->save();
        return back();
    }

    public function updateCategory(Request $request, $id)
    {
        $category = Category::where('id', $id)->firstOrFail();
        $category->category = $request->category;
        $category->save();
        return back();
    }

    public function updateCompany(Request $request, $id)
    {
        $company = Company::where('id', $id)->firstOrFail();
        $company->company = $request->company;
        $company->save();
        return back();
    }

    public function getCompany()
    {
        return view('admin.Company');
    }

    public function getCategory()
    {
        return view('admin.Category');
    }

}
