<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyoverviewController extends Controller
{
    public function index()
    {
        return view('overview.index');
    }
}
