@extends('layouts.touroku')

@section('title','商品登録')

@section('content')
<p>入力欄を全て埋め、次へ進んでください。</p>
@if (count($errors) > 0)
<p>入力に問題があります。再入力してください。</p>
@endif
<table>
  <form  method = "POST" action = "/merchandisetouroku/confirm" enctype="multipart/form-data">
    @csrf
    @if ($errors -> has('name'))
    <p>ERROR:{{$errors -> first('name')}}</p>
    @endif
    <tr><th>商品名: </th><td><input type = "text" name = "name" value = "{{old('name')}}"></td></tr>
    @if ($errors -> has('sellingprice'))
    <p>ERROR:{{$errors -> first('sellingprice')}}</p>
    @endif
    <tr><th>販売単価: </th><td><input type = "text" name = "sellingprice" value = "{{old('sellingprice')}}"></td></tr>
    @if ($errors -> has('purchaseprice'))
            <p>ERROR:{{ $errors -> first('purchaseprice')}}</p>
    @endif
    <tr><th>仕入単価: </th><td><input type = "text" name = "purchaseprice" value = "{{old('purchaseprice')}}"></td></tr>
    @if ($errors -> has('updatername'))
    <p>ERROR:{{$errors -> first('updatername')}}</p>
    @endif
    <tr><th>更新者名: </th><td><input type = "text" name = "updatername" value = "{{old('updatername')}}"></td></tr>
    <tr><th>画像ファイル: </th><td><input type = "file" name = "imageFile"></td></tr>
    <tr><th></th><td><input type="button" value="戻る" onClick="history.back()"></td></tr>
    <tr><th></th><td><input type = "submit" value = "次へ"></td></tr>
  </form>
</table>
@endsection

@section('footer')
copyright 2020 Sed.
@endsection
