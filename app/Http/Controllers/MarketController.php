<?php

namespace App\Http\Controllers;
use App\Models\Market;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function index(Request $request){
    $items = Market::all();
    return view('market.index',['items'=>$items]);
    }
    public function find(Request $request){
        return view('market.find',['input'=>'']);
    }
    public function search(Request $request){
        $item = Market::find($request->input);
        $param=['input'=>$request->input,'item'=>$item];
        return view('market.find',$param);

    }
}
