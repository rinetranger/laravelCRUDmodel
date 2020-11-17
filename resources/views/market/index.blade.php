@extends('layouts.testapp')

@section('title','Market.Index')

@section('menubar')
    @parent
    Indexpage
@endsection

@section('content')
<table>
    <tr>
        <th>type</th>
        <th>price1</th>
        <th>Country1</th>
        <th>Country2</th>
    </tr>
    @foreach($items as $item)
    <tr>
        <td>{{$item->getData()}}</td>

    </tr>
    @endforeach
</table>

@endsection
