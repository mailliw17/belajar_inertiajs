<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;


class PagesController extends Controller
{
    public function index()
    {
        $title = 'Ini adalah judul';
        
        return Inertia::render('Home', [
            'judul' => $title
        ]);
    }

    public function about()
    {
        $title = 'Halaman kami';
        return Inertia::render('About', [
            'judul' => $title
        ]);
    }
}
