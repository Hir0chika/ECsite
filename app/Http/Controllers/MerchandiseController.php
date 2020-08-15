<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MerchandiseRequest;
use Illuminate\Support\Facades\DB;

class MerchandiseController extends Controller
{
  public function index(Request $request)
  {
    return view('merchandise.index');
  }

  public function confirm(Request $request)
  {
    $code = $request -> code;
    $name = $request -> name;
    $sellingprice = $request -> sellingprice;
    $purchaseprice = $request -> purchaseprice;
    $updatername = $request -> updatername;
    $imageFile = $request->file('imageFile');
    $path = $imageFile->store('public/img');
    $readPath = str_replace('public/', 'storage/', $path);
    $data = array(
        'path' => $path,
        'read_path' => $readPath,
    );
    $request->session()->put('data', $data);
    return view('merchandise.confirm',compact('code','name','sellingprice','purchaseprice','updatername','data'));
  }

  public function create(Request $request)
  {
    $data = $request->session()->get('data');
    $path = $data['path'];
    $fileName = basename($path);
    $param = [
      'code' => $request -> code,
      'name' => $request -> name,
      'sellingprice' => $request -> sellingprice,
      'purchaseprice' => $request -> purchaseprice,
      'updatername' => $request -> updatername,
      'filename' => $fileName
    ];
    DB::table('M_MERCHANDISE')->insert($param);
    return view('merchandise.create');
  }
  public function list(Request $request)
  {
    $items = DB::table('M_MERCHANDISE')->get();
    return view('merchandise.list',['items' => $items]);
  }

  public function detail(Request $request,$code)
  {
      $param = ['code' => $code];
      $items = DB::select('select * from M_MERCHANDISE where code = :code',$param);
      $name = $items[0] -> name;
      $sellingprice = $items[0] -> sellingprice;
      $purchaseprice = $items[0] -> purchaseprice;
      $updatername = $items[0] -> updatername;
      $fileName = $items[0] -> filename;
      $request -> session() -> put('code',$code);

      return view('merchandise.detail',compact('name','sellingprice','purchaseprice','updatername','fileName'));
  }

  public function update(Request $request)
  {
    $imageFile = $request->file('imageFile');
    $path = $imageFile->store('public/img');
    $fileName = basename($path);
    $param = [
      'name' => $request -> name,
      'sellingprice' => $request -> sellingprice,
      'purchaseprice' => $request -> purchaseprice,
      'updatername' => $request -> updatername,
      'fileName' => $fileName,
    ];
    $code = $request->session()->get('code');
    DB::table('M_MERCHANDISE')
      -> where('code',$code)
      -> update($param);
    return view('merchandise.update');
  }

  public function delete(Request $request)
  {
    $code = $request->session()->get('code');
    $param = ['code' => $code];
    $items = DB::select('select * from M_MERCHANDISE where code = :code',$param);
    $name = $items[0] -> name;
    $sellingprice = $items[0] -> sellingprice;
    $purchaseprice = $items[0] -> purchaseprice;
    $updatername = $items[0] -> updatername;
    return view('merchandise.delete',compact('name','sellingprice','purchaseprice','updatername'));
  }

  public function deleteconfirm(Request $request)
 {
   $code = $request->session()->get('code');
   $param = ['code' => $code];
   DB::delete('delete from M_MERCHANDISE where code = :code',$param);
  return view('merchandise.deleteconfirm');
 }
}
