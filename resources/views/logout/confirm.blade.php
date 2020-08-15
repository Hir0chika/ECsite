@extends('layouts.touroku')

@section('title','')

@section('content')
<p>ログアウトしますか？</p>
<form  method = "POST" action = "logout/delete">
@csrf
<input type = "submit" value = "はい">
<input type="button" value="戻る" onClick="history.back()">
</form>
@endsection

@section('footer')
copyright 2020 Sed.
@endsection
