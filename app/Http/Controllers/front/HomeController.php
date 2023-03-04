<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Work;
use App\Models\Team;
use App\Models\About;
use App\Models\Contact;
use App\Models\Slider;

class HomeController extends Controller
{
    //
    public function index()
    {
        $sliders = Slider::all();
        $teams = Team::all();
        $contacts = Contact::all();
        return view('front.home.index', compact('sliders', 'teams', 'contacts'));
    }
}
