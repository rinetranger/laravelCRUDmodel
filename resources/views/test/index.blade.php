@extends('layouts.testapp')

@section('title','Index')

@section('menubar')
    @parent
    Indexpage
@endsection

@section('content')
<table>
    <tr>
        <th>type</th>
        <th>price1</th>
        <th>price2</th>
    </tr>
    @foreach($items as $item)
    <tr>
        <td>{{$item->type}}</td>
        <td>{{$item->price1}}</td>
        <td>{{$item->price2}}</td>
    </tr>
    @endforeach
</table>

@endsection
