@extends('layouts.testapp')

@section('title','Delete')

@section('menubar')
    @parent
    削除　page
@endsection

@section('content')
<table>
    <form method="POST" action="/test/del">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$form->id}}">
        <tr><th>type</th><td><input type="text" name="type" value="{{$form->type}}"></td></tr>
        <tr><th>price1</th><td><input type="text" name="price1" value="{{$form->price1}}"></td></tr>
        <tr><th>price2</th><td><input type="text" name="price2" value="{{$form->price2}}"></td></tr>
        <tr><th></th><td><input type="submit" name="send"></td></tr>
    </form>
</table>

@endsection
@section('footer')
copyright 2020 by rinirn

@endsection
