<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home.index', [
            'title' => 'Volunteeeaaaah',
            'volunteer' => 'RelaOne',
            'categories' => category::limit(4)->get()
        ]);
    }
}
