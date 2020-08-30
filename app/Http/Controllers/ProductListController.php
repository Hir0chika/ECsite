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

  public function detail(Request $request,$code)
  {
      $param = ['code' => $code];
      $items = DB::select('select * from M_MERCHANDISE where code = :code',$param);
      $name = $items[0] -> name;
      $sellingprice = $items[0] -> sellingprice;
      $fileName = $items[0] -> filename;
      $request -> session() -> put('code',$code);

      return view('productList.detail',compact('name','sellingprice','fileName'));
  }
}
