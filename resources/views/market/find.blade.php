@extends('layouts.testapp')

@section('title','Market.find')

@section('menubar')
    @parent
    検索　page
@endsection

@section('content')
<table>
    <form method="POST" action="/market/find">
        {{ csrf_field() }}
        <input type="text" name="input" value={{$input}}>
        <input type="submit" name="send">
    </form>
    @if(isset($item)){
        <table>
            <tr><th>data</th></tr>
            <tr>
                <td>{{$item->getData()}}</td>

            </tr>
        </table>
    @endif
    }
</table>

@endsection
@section('footer')
copyright 2020 by rinirn

@endsection
