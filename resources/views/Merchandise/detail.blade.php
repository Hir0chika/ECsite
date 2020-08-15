@extends('layouts.portal')

@section('title','商品情報')

@section('content')
<table>
  <form  method = "POST" action = "/merchandise/update" enctype="multipart/form-data">
    @csrf
    <tr><th>商品名: </th><td><input name = "name" value = "{{$name}}"></td></tr>
    <tr><th>販売単価: </th><td><input name = "sellingprice" value = "{{$sellingprice}}"></td></tr>
    <tr><th>仕入単価: </th><td><input name = "purchaseprice" value = "{{$purchaseprice}}"></td></tr>
    <tr><th>更新者名: </th><td><input name = "updatername" value = "{{$updatername}}"></td></tr>
    <tr><th>画像ファイル: </th><td><input type = "file" name = "imageFile"></td></tr>
    <tr><th>販売者情報を修正する</th><td><input type = "submit" value = "修正する"></td></tr>
  </form>
</table>

<p>商品情報を削除する</p>
<form  method = "POST" action = "/merchandise/delete">
@csrf
<input type = "submit" value = "商品情報を削除">
</form>

<input type="button" value="戻る" onClick="history.back()">
@endsection

@section('footer')
    copyright 2020 Sed.
@endsection
