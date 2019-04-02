@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    <table>
        <tr><th>ユーザー</th><th>メール</th></tr>
        @foreach($data as $item)
            <tr><th>{{$item['name']}}</th><td>{{$item['mail']}}</td></tr>
        @endforeach
    </table>
@endsection

@section('footer')
    copyright 2019.
@endsection
