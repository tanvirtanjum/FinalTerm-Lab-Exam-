<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    function index()
    {
      if(session()->get('TYPE') == 1)
      {
        //REQUIRE ADMIN_DASH VIEW (DONE)
        return view('admin.index');
      }
      else
      {
        return redirect()->route('login.index');
      }

    }
}
