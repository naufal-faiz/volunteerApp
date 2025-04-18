<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home.index', [
            'title' => 'GoodDeed',
            'header' => 'GoodDeed',
            'categories' => category::limit(4)->get(),
            'volunteers' => Volunteer::latest()->limit(3)->get()
        ]);
    }
}
