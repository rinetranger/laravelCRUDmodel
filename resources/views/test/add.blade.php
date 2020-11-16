@extends('layouts.testapp')

@section('title','Add')

@section('menubar')
    @parent
    新規作成　page
@endsection

@section('content')
<table>
    <form method="POST" action="/test/add">
        {{ csrf_field() }}
        <tr><th>type</th><td><input type="text" name="type"></td></tr>
        <tr><th>price1</th><td><input type="text" name="price1"></td></tr>
        <tr><th>price2</th><td><input type="text" name="price2"></td></tr>
        <tr><th></th><td><input type="submit" name="send"></td></tr>
    </form>
</table>

@endsection
@section('footer')
copyright 2020 by rinirn

@endsection
