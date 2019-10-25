<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Page;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $pages = Page::active()->get();
        $items = Menu::active()->get();
        return view('admin.dashboard', compact('pages', 'items'));
    }
}
