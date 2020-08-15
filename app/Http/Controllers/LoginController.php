<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
  public function index(Request $request)
  {
    return view('login.index');
  }

  public function post(LoginRequest $request)
  {
    $id = $request -> id;
    $password = $request -> password;
    $param = ['id' => $id];
    $dbPassword = DB::select('select password from M_STAFF where id = :id',$param);
    $dbPass = $dbPassword[0] -> password;
    if($password == $dbPass){
      $request -> session() -> put('id',$id );
      $request -> session() -> put('loginflg',1);
      return view('portal.index');
    }elseif(!isset($dbPassword)){
      return redirect('/login')
      ->withInput()
      ->withErrors(['message' => '入力されたIDまたはパスワードが違います。']);
    }else{
      return redirect('/login')
      ->withInput()
      ->withErrors(['message' => '入力されたIDまたはパスワードが違います。']);
    }
  }
}
