<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlankController extends Controller
{
    public function index()
    {
        return view('backend.blank.index');
    }

    public function show()
    {
        return view('backend.blank.view');
    }
    public function create()
    {
        return view('backend.blank.create');
    }
}
