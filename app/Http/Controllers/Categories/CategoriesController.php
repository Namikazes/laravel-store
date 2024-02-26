<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index($categories)
    {
        return view('categories', compact('categories'));
    }

    public function show($category)
    {
        return view('category', compact('category'));
    }
}
