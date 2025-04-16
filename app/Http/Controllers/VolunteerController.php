<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function index() {
        return view('home.activities.index', [
            'title' => 'Kegiatan',
            'activities' => Volunteer::all()
        ]);
    }

    public function show(Volunteer $volunteer) {
        return view('home.activities.show', [
            'title' => 'Opportunity',
            'activity' => $volunteer
        ]);
    } 
}
