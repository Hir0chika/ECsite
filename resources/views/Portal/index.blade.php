@extends('layouts.portal')

@section('title','HOME')

@section('content')
<p>販売者情報参照</p>
<form  method = "POST" action = "/portal/detail">
@csrf
<input type = "submit" value = "詳細">
</form>

<p>商品登録</p>
<form  method = "POST" action = "/merchandise/touroku">
@csrf
<input type = "submit" value = "登録">
</form>

<p>商品情報一覧</p>
<form  method = "POST" action = "/merchandise/list">
@csrf
<input type = "submit" value = "一覧">
</form>

<p>ログアウト</p>
<form  method = "POST" action = "/logout">
@csrf
<input type = "submit" value = "ログアウト">
</form>

@endsection

@section('footer')
    copyright 2020 Sed.
@endsection
