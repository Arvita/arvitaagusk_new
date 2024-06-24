<?php

namespace App\Http\Controllers\Admin;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $publications = Publication::latest()->paginate(5)->orderBy('created_at','DESC');
        return view('landing.index', compact('publications'))->with('no', 1);
    }
}
