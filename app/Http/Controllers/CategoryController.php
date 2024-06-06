<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $cat = Category::orderBy('category')->get();

        return view('category.index', ['categories' => $cat]);
    }
}
