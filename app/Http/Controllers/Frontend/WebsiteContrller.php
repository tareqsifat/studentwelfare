<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WebsiteContrller extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function curriculam()
    {
        return view('frontend.curriculam');
    }
}
