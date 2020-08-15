@extends('layouts.touroku')

@section('title','新規登録')

@section('content')
<p>入力欄を全て埋め、次へ進んでください。</p>
@if (count($errors) > 0)
<p>入力に問題があります。再入力してください。</p>
@endif
<table>
  <form  method = "POST" action = "/touroku/confirm">
    @csrf
    @if ($errors -> has('name'))
    <p>ERROR:{{$errors -> first('name')}}</p>
    @endif
    <tr><th>お名前: </th><td><input type = "text" name = "name" value = "{{old('name')}}"></td></tr>
    @if ($errors -> has('address'))
    <p>ERROR:{{$errors -> first('address')}}</p>
    @endif
    <tr><th>住所: </th><td><input type = "text" name = "address" value = "{{old('address')}}"></td></tr>
    @if ($errors -> has('tel'))
    <p>ERROR:{{$errors -> first('tel')}}</p>
    @endif
    <tr><th>電話番号: </th><td><input type = "text" name = "tel" value = "{{old('tel')}}"></td></tr>
    @if ($errors -> has('age'))
        @foreach ($errors->get('age') as $error)
            <p>ERROR:{{ $error }}</p>
        @endforeach
    @endif
    <tr><th>年齢: </th><td><input type = "text" name = "age" value = "{{old('age')}}"></td></tr>
    @if ($errors -> has('email'))
    <p>ERROR:{{$errors -> first('email')}}</p>
    @endif
    <tr><th>メールアドレス: </th><td><input type = "text" name = "email" value = "{{old('email')}}"></td></tr>
    @if ($errors -> has('id'))
    <p>ERROR:{{$errors -> first('id')}}</p>
    @endif
    <tr><th>ID: </th><td><input type = "text" name = "id" value = "{{old('id')}}"></td></tr>
    @if ($errors -> has('password1'))
    <p>ERROR:{{$errors -> first('password1')}}</p>
    @endif
    <tr><th>パスワード: </th><td><input type = "password" name = "password1" value = "{{old('password1')}}"></td></tr>
    @if ($errors -> has('password2'))
    <p>ERROR:{{$errors -> first('password2')}}</p>
    @endif
    <tr><th>パスワード確認用: </th><td><input type = "password" name = "password2" value = "{{old('password2')}}"></td></tr>
    <tr><th></th><td><input type = "submit" value = "次へ"></td></tr>
  </form>
</table>
@endsection

@section('footer')
copyright 2020 Sed.
@endsection
