@extends('layouts.touroku')

@section('title','入力確認')

@section('content')
<p>入力した内容にお間違いはないでしょうか。</p>
<P>なければ完了を押してください。</p>
<table>
  <form  method = "POST" action = "/merchandisetouroku/create">
    @csrf
    @if ($errors -> has('name'))
    <p>ERROR:{{$errors -> first('name')}}</p>
    @endif
    <tr><th>商品名: </th><td><input type = "text" name = "name" value = "{{$name}}"></td></tr>
    <tr><th>販売単価: </th><td><input type = "text" name = "sellingprice" value = "{{$sellingprice}}"></td></tr>
    <tr><th>仕入単価: </th><td><input type = "text" name = "purchaseprice" value = "{{$purchaseprice}}"></td></tr>
    <tr><th>更新者名: </th><td><input type = "text" name = "updatername" value = "{{$updatername}}"></td></tr>
    <tr><th>画像ファイル: </th><td><img src="{{asset($data['read_path'])}}" width="200" height="130"></td></tr>
    <tr><th></th><td><input type="button" value="戻る" onClick="history.back()"></td></tr>
    <tr><th></th><td><input type = "submit" value = "完了"></td></tr>
  </form>
</table>
@endsection

@section('footer')
    copyright 2020 Sed.
@endsection
