<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Partner;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $partners = Partner::where('is_active', 1)->get();
        
        return view('frontend.home', [
            'partners' => $partners
        ]);
    }
}
