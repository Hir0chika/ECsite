<!-- JSの読み込み -->
<script src=“js/myscript.js” type=“text/javascript”></script>

@extends('layouts.portal')

@section('title','商品情報一覧')

@section('content')
@csrf
<table>
  @foreach ($items as $item)
  <tr>
    <th>商品名 </th>
    <th>販売単価 </th>
    <th>仕入単価 </th>
    <th>更新者名</th>
    <th>画像ファイル</th>
  </tr>

  <tr>
    <td>{{$item->name}}</td>
    <td>{{$item->sellingprice}}</td>
    <td>{{$item->purchaseprice}}</td>
    <td>{{$item->updatername}}</td>
    <td><img src="{{ asset('/storage/img/'.$item->filename) }}"></td>
    <td><button type="button" class="code" onClick="location.href='http://localhost:8000/merchandise/detail/{{$item->code}}'">編集</button></td>
  </tr>
  @endforeach
</table>

<input type="button" value="戻る" onClick="history.back()">

@endsection

@section('footer')
    copyright 2020 Sed.
@endsection
