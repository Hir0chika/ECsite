@extends('layouts.touroku')

@section('title','ログイン')

@section('content')
@if (count($errors) > 0)
<p>入力に問題があります。再入力してください。</p>
@endif
@if ($errors -> has('id'))
<p>ERROR:{{$errors -> first('id')}}</p>
@endif
@if ($errors -> has('password'))
<p>ERROR:{{$errors -> first('password')}}</p>
@endif
@if ($errors -> has('message'))
<p>ERROR:{{$errors -> first('message')}}</p>
@endif
<p>会員ページへようこそ！</p>
<p>ユーザーIDとパスワードを入力してください。</p>
<form  method = "POST" action = "login">
  <table>
    @csrf
      <tr><th>ユーザーID: </th><td><input type = "text" name = "id" value = "{{old('id')}}"></td></tr>
      <tr><th>パスワード: </th><td><input type = "password" name = "password" value = "{{old('password')}}"></td></tr>
  </table>
  <input type = "submit" value = "ログイン">
</form>
<a href="http://localhost:8000/touroku">新規会員登録はこちら</a>
@endsection

@section('footer')
copyright 2020 Sed.
@endsection
