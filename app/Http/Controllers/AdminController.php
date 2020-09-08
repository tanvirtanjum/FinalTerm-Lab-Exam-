<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    function index()
    {
      $info = DB::table('emp')->get();
      if(session()->get('TYPE') == 1)
      {
        //REQUIRE ADMIN_DASH VIEW (DONE)
        return view('admin.index')->with('info',$info);
      }
      else
      {
        return redirect()->route('login.index');
      }

    }

    function insert(Request $request)
    {
      DB::table('emp')->insert(['ename' => $request->a, 'cname' => $request->b, 'num' => $request->c, 'uname' => $request->d, 'pass' => $request->e, 'sid' => $request->f]);
      return redirect()->route('admin.index');
    }

    function delete($id, Request $request)
    {
      DB::table('emp')->where('id', '=', $id)->delete();
      return redirect()->route('admin.index');
    }

    function modify($id, Request $request)
    {
      $info = DB::table('emp')->where('id', '=', $id)->get();
      if(session()->get('TYPE') == 1)
      {
        //REQUIRE ADMIN_DASH VIEW (DONE)
        return view('admin.edit')->with('info',$info);
      }
      else
      {
        return redirect()->route('login.index');
      }
    }
    function edit($id, Request $request)
    {
      DB::table('emp')->where('id', $id)->update(['ename' => $request->a, 'cname' => $request->b, 'num' => $request->c, 'uname' => $request->d, 'pass' => $request->e, 'sid' => $request->f]);
      //DB::table('emp')->where('id', '=', $id)->delete();
      return redirect()->route('admin.index');
    }
}
