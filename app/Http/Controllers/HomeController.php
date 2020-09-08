<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    function index()
    {
    	return view('home.index');
    }

    function login_request(Request $request)
    {

    }
}
