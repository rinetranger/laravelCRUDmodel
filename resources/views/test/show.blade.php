@extends('layouts.testapp')

@section('title','Show')

@section('menubar')
    @parent
    詳細　page
@endsection

@section('content')
@if($items !=null)
    @foreach($items as $item)
        <table width="400px">
                <tr><th width="50px">id:</th><td><input type="text" name="id" value="{{$item->id}}"></td></tr>
                <tr><th width="50px">type:</th><td><input type="text" name="type" value="{{$item->type}}"></td></tr>
                <tr><th width="50px">price1</th><td><input type="text" name="price1" value="{{$item->price1}}"></td></tr>
                <tr><th width="50px">price2</th><td><input type="text" name="price2" value="{{$item->price2}}"></td></tr>
        </table>
        @endforeach
        @endif

@endsection
@section('footer')
copyright 2020 by rinirn

@endsection
