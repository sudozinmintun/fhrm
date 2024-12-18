<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CEOMessageController extends Controller
{
    public function index()
    {
        return view('ceomessage.index');
    }
}
