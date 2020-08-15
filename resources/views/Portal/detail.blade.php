@extends('layouts.portal')

@section('title','販売者情報')

@section('content')
<table>
  <form  method = "POST" action = "/portal/update">
    @csrf
    <tr><th>お名前: </th><td><input name = "name" value = "{{$name}}"></td></tr>
    <tr><th>住所: </th><td><input name = "address" value = "{{$address}}"></td></tr>
    <tr><th>電話番号: </th><td><input name = "tel" value = "{{$tel}}"></td></tr>
    <tr><th>年齢: </th><td><input name = "age" value = "{{$age}}"></td></tr>
    <tr><th>メールアドレス: </th><td><input name = "email" value = "{{$email}}"></td></tr>
    <tr><th>販売者情報を修正する</th><td><input type = "submit" value = "修正する"></td></tr>
  </form>
</table>

<p>販売者情報を削除する</p>
<form  method = "POST" action = "/portal/delete">
@csrf
<input type = "submit" value = "削除する">
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
