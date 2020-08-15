@extends('layouts.portal')

@section('title','商品情報')

@section('content')
<p>本当に削除しますか？</p>
  <table>
    <form  method = "POST" action = "/merchandise/deleteconfirm">
      @csrf
      <tr><th>商品名: </th><td><input name = "name" value = "{{$name}}"></td></tr>
      <tr><th>販売単価: </th><td><input name = "sellingprice" value = "{{$sellingprice}}"></td></tr>
      <tr><th>仕入単価: </th><td><input name = "purchaseprice" value = "{{$purchaseprice}}"></td></tr>
      <tr><th>更新者名: </th><td><input name = "updatername" value = "{{$updatername}}"></td></tr>
      <tr><th>商品情報を削除する</th><td><input type = "submit" value = "削除"></td></tr>
    </form>
  </table>

@endsection

@section('footer')
    copyright 2020 Sed.
@endsection
