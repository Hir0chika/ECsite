<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductListController extends Controller
{
  public function index(Request $request)
  {
    $items = DB::table('M_MERCHANDISE')->get();
    return view('productList.index',['items' => $items]);
  }
}
