<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortalController extends Controller
{
  public function index(Request $request)
  {
    return view('portal.index');
  }

  public function detail(Request $request)
  {
    $id = $request->session()->get('id');
    $param = ['id' => $id];
    $items = DB::select('select * from M_STAFF where id = :id',$param);
    $name = $items[0] -> name;
    $address = $items[0] -> address;
    $tel = $items[0] -> tel;
    $age = $items[0] -> age;
    $email = $items[0] -> email;

    return view('portal.detail',compact('name','address','tel','age','email'));
  }

  public function update(Request $request)
  {
    $param = [
      'name' => $request -> name,
      'address' => $request -> address,
      'tel' => $request -> tel,
      'age' => $request -> age,
      'email' => $request -> email,
    ];
    $id = $request->session()->get('id');
    DB::table('M_STAFF')
      ->where('id' , $id)
      ->update($param);
    return view('portal.update');
  }

  public function delete(Request $request)
  {
    $id = $request->session()->get('id');
    $param = ['id' => $id];
    $items = DB::select('select * from M_STAFF where id = :id',$param);
    $name = $items[0] -> name;
    $address = $items[0] -> address;
    $tel = $items[0] -> tel;
    $age = $items[0] -> age;
    $email = $items[0] -> email;
    return view('portal.delete',compact('name','address','tel','age','email'));
  }

  public function deleteconfirm(Request $request)
 {
   $id = $request->session()->get('id');
   $param = ['id' => $id];
   $items = DB::select('select * from M_STAFF where id = :id',$param);
   DB::delete('delete from M_STAFF where id = :id',$param);
  return view('portal.deleteconfirm');
 }

 public function deletecomplete(Request $request)
 {
   return view('touroku.index');
 }
}
