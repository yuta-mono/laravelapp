@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>{{$msg}}</p>
    @if (count($errors) > 0)
        <div>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif
    <table>
        <form action="./hello" method="post">
            {{ csrf_field() }}
            <tr><th>name: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
            <tr><th>mail: </th><td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>
            <tr><th>age: </th><td><input type="text" name="age" value="{{old('age')}}"></td></tr>
            <tr><th></th><td><input type="submit" value="send"></td></tr>
        </form>
    </table>
@endsection

@section('footer')
    copyright 2019.
@endsection
