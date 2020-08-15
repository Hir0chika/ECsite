<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TourokuRequest;
use Validator;
use Illuminate\Support\Facades\DB;

class TourokuController extends Controller
{
  public function index(Request $request)
  {
    return view('touroku.index');
  }

  public function confirm(Request $request)
  {
    $name = $request -> name;
    $address = $request -> address;
    $tel = $request -> tel;
    $age = $request -> age;
    $email = $request -> email;
    $id = $request -> id;
    $password1 = $request -> password1;
    $password2 = $request -> password2;

    return view('touroku.confirm',compact('name','address','tel','age','email','id','password1','password2'));
  }

  public function create(Request $request)
  {
    $param = [
      'name' => $request -> name,
      'address' => $request -> address,
      'tel' => $request -> tel,
      'age' => $request -> age,
      'email' => $request -> email,
      'id' => $request -> id,
      'password' => $request -> password1,
    ];

    DB::insert('insert into M_STAFF (name,address,tel,age,email,id,password) values (:name,:address,:tel,:age,:email,:id,:password)',$param);
    $request -> session() -> put('id',$request -> id );
    $request -> session() -> put('loginflg',1);
    return view('touroku.create');
  }
}
