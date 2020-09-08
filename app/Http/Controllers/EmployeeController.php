<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use Validator;

class EmployeeController extends Controller
{
    function index()
    {
      $info = DB::table('job')->get();
      if(session()->get('TYPE') == 2)
      {
        //REQUIRE ADMIN_DASH VIEW (DONE)
        return view('employee.index')->with('info',$info);
      }
      else
      {
        return redirect()->route('login.index');
      }

    }

    function insert(Request $request)
    {
      DB::table('job')->insert(['name' => $request->a, 'title' => $request->b, 'location' => $request->c, 'salary' => $request->d]);
      return redirect()->route('employee.index');
    }

    function delete($id, Request $request)
    {
      DB::table('job')->where('id', '=', $id)->delete();
      return redirect()->route('employee.index');
    }

    function modify($id, Request $request)
    {
      $info = DB::table('job')->where('id', '=', $id)->get();
      if(session()->get('TYPE') == 2)
      {
        //REQUIRE ADMIN_DASH VIEW (DONE)
        return view('employee.edit')->with('info',$info);
      }
      else
      {
        return redirect()->route('login.index');
      }
    }
    function edit($id, Request $request)
    {
      DB::table('job')->where('id', $id)->update(['name' => $request->a, 'title' => $request->b, 'location' => $request->c, 'salary' => $request->d]);
      return redirect()->route('employee.index');
    }
}
