<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function home()
    {
        $people = ['Marko', 'Milos', 'Janko'];

        return view('pages.about', compact('people'));
    }
}
