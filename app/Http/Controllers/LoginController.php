<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class LoginController extends Controller
{

  function index()
  {
  	return view('login.index');
  }

  function execute(Request $request)
  {
    $user = DB::table('emp')->where('uname', $request->a)->where('pass', $request->b)->get();

    	if(count($user) > 0 )
      {
        $request->session()->put('TYPE', $user[0]->sid);

        if(session()->get('TYPE') == 1)
        {
          //REQUIRE ADMIN_DASH VIEW (DONE)
          return redirect()->route('admin.index');
        }

        if(session()->get('TYPE') == 2)
        {
          //REQUIRE MANAGER_DASH VIEW (DONE)
          return redirect()->route('employee.index');
        }
    	}

      else
      {
        $request->session()->flash('_alert', 'INVALID USERNAME/PASSWORD');
        return redirect()->route('login.index');
      }
  }
}
