<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home.index', [
            'title' => 'Home',
            'header' => 'GoodDeed',
            'categories' => category::limit(4)->get(),
            'volunteers' => Volunteer::latest()->limit(4)->get()
        ]);
    }

    public function about() {
        return view('home.about', [
            'title' => 'About',
            'header' => 'Tentang Kami'
        ]);
    }
}
