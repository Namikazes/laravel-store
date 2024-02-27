<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::get();

        return view('categories', compact('categories'));
    }

    public function show($code)
    {
        $category = Category::where('code', $code)->first();

        return view('category', compact('category'));
    }
}
