@extends('layouts.portal')

@section('title','ホーム画面')

@section('content')
<p>販売者情報参照はこちら</p>
<form  method = "POST" action = "/portal/detail">
@csrf
<input type = "submit" value = "詳細へ">
</form>

<p>商品登録はこちら</p>
<form  method = "POST" action = "/merchandise/touroku">
@csrf
<input type = "submit" value = "登録する">
</form>

<p>商品情報一覧はこちら</p>
<form  method = "POST" action = "/merchandise/list">
@csrf
<input type = "submit" value = "一覧へ">
</form>

<p>ログアウトはこちら</p>
<form  method = "POST" action = "/logout">
@csrf
<input type = "submit" value = "ログアウト">
</form>

@endsection

@section('footer')
    copyright 2020 Sed.
@endsection
