<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('home.activities.categories', [
            'title' => 'Kategori',
            'header' => 'Pilih kategori, tersedia ' . Category::count() . ' pilihan sesuai minat anda',
            'activities' => Category::all()
        ]);
    }

    public function show(Category $category)
    {
        return view('home.activities.index', [
            'title' => 'Kategori',
            'header' => 'Kategori : ' . $category->title,
            'activities' => $category->volunteers
        ]);
    }
}
