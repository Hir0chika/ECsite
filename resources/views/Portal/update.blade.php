@extends('layouts.portal')

@section('title','ホーム画面')

@section('content')
<p>修正が完了しました。</p>

  <form  method = "POST" action = "/portal">
  @csrf
  <input type = "submit" value = "ホームへ">
  </form>

@endsection

@section('footer')
    copyright 2020 Sed.
@endsection
