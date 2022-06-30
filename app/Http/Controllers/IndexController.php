<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Setting;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('index', [
            'setting' => Setting::whereId(1)->first(),
            'galleries' => Gallery::where('status', 'active')->latest()->limit(16)->get()
        ]);
    }
}
