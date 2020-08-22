@extends('layouts.portal')

@section('title','ホーム画面')

@section('content')
<p>本当に削除しますか？</p>
  <table>
    <form  method = "POST" action = "/portal/deleteconfirm">
      @csrf
      <tr><th>お名前: </th><td><input name = "name" value = "{{$name}}"></td></tr>
      <tr><th>住所: </th><td><input name = "address" value = "{{$address}}"></td></tr>
      <tr><th>電話番号: </th><td><input name = "tel" value = "{{$tel}}"></td></tr>
      <tr><th>年齢: </th><td><input name = "age" value = "{{$age}}"></td></tr>
      <tr><th>メールアドレス: </th><td><input name = "email" value = "{{$email}}"></td></tr>
      <tr><th>販売者情報を削除する</th><td><input type = "submit" value = "削除"></td></tr>
    </form>
  </table>

  <input type="button" value="戻る" onClick="history.back()">

@endsection

@section('footer')
    copyright 2020 Sed.
@endsection
