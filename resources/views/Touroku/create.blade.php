@extends('layouts.touroku')

@section('title','登録完了')

@section('content')
<p>登録完了しました。</p>
<form action = "/portal" method = "post">
@csrf
<input type = "submit" value = "ホームへ">
</form>

@endsection

@section('footer')
    copyright 2020 Sed.
@endsection
