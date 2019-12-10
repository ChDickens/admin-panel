<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function mainPage()
    {
        $page = Page::active()->where('url', 'home')->first();
        if (!$page) {
            abort(404, 'Page not found');
        }

        return view('front.main-page', compact('page'));
    }

    public function show($url = null)
    {
        $page = Page::active()->where('url', $url)->first();
        if (!$page) {
            abort(404, 'Page not found');
        }

        return view('front.inner', compact('page'));
    }
}
