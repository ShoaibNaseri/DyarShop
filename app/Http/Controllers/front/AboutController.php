<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Work;

class AboutController extends Controller
{
    //
    public function index()
    {
        $num = 1;
        $services = Service::all();
        $works = Work::all();
        return view('front.about.index', compact('services', 'works', 'num'));
    }
}
