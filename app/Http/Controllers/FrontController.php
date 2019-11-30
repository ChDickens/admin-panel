<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function show($url = null)
    {
        $page = Page::where('url', $url)->first();
        if (!$page) {
            abort(404, 'Page not found');
        }

        return view('welcome', compact('page'));
    }
}
