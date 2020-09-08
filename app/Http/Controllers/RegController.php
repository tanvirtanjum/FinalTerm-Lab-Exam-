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

    function insert(Request $request)
    {
      DB::table('emp')->insert(['ename' => $request->a, 'cname' => $request->b, 'num' => $request->c, 'uname' => $request->d, 'pass' => $request->e, 'sid' => '2']);
      return redirect()->route('login.index');
    }
}
