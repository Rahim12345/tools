<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class educationController extends Controller
{
    public function education()
    {
        return view('education');
    }
}
