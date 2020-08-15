@extends('layouts.touroku')

@section('title','入力確認')

@section('content')
<p>入力した内容にお間違いはないでしょうか。</p>
<P>なければ完了を押してください。</p>
<table>
  <form  method = "POST" action = "/touroku/create">
    @csrf
    @if ($errors -> has('name'))
    <p>ERROR:{{$errors -> first('name')}}</p>
    @endif
    <tr><th>お名前: </th><td><input type = "text" name = "name" value = "{{$name}}"></td></tr>
    <tr><th>住所: </th><td><input type = "text" name = "address" value = "{{$address}}"></td></tr>
    <tr><th>電話番号: </th><td><input type = "text" name = "tel" value = "{{$tel}}"></td></tr>
    <tr><th>年齢: </th><td><input type = "text" name = "age" value = "{{$age}}"></td></tr>
    <tr><th>メールアドレス: </th><td><input type = "text" name = "email" value = "{{$email}}"></td></tr>
    <tr><th>ID: </th><td><input type = "text" name = "id" value = "{{$id}}"></td></tr>
    <tr><th>パスワード: </th><td><input type = "password" name = "password1" value = "{{$password1}}"></td></tr>
    <tr><th>パスワード確認用: </th><td><input type = "password" name = "password2" value = "{{$password2}}"></td></tr>
    <tr><th></th><td><input type="button" value="戻る" onClick="history.back()"></td></tr>
    <tr><th></th><td><input type = "submit" value = "完了"></td></tr>
  </form>
</table>
@endsection

@section('footer')
    copyright 2020 Sed.
@endsection
