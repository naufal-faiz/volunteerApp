<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('home.activities.index', [
            'title' => 'Kategori',
            'activities' => Category::all()
        ]);
    }
}
