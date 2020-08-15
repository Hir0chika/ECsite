<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
  public function confirm(Request $request)
  {
    return view('logout.confirm');
  }

  public function delete(Request $request)
  {
    session()->flush();
    return view('logout.delete');
  }
}
