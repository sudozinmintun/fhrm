<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use Illuminate\Http\Request;

class RecruitmentController extends Controller
{
    public function index()
    {
        $activities = Activities::all();
        return view('recruitment.index', compact('activities'));
    }
}
