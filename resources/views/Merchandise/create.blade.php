@extends('layouts.touroku')

@section('title','商品登録')

@section('content')
<p>商品登録が完了しました。</p>
<form action = "/merchandise/touroku" method = "post">
@csrf
<input type = "submit" value = "商品登録画面へ">
</form>
<form action = "/portal" method = "post">
@csrf
<input type = "submit" value = "ホームへ">
</form>
@endsection

@section('footer')
copyright 2020 Sed.
@endsection
