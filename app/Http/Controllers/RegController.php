<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class RegController extends Controller
{

    function index()
    {
    	return view('reg.index');
    }
}
