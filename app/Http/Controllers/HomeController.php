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

    public function volunteer(Volunteer $volunteer) {
        return view('home.activities.show', [
            'title' => 'Opportunity',
            'header' => 'Detail' . $volunteer->title,
            'activity' => $volunteer
        ]);
    }

    public function about() {
        return view('home.activities.about', [
            'title' => 'About',
            'header' => 'Tentang Kami'
        ]);
    }
}
