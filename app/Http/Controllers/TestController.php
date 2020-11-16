<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;


class TestController extends Controller
{
    public function index(Request $request){

          $items =DB::table('api')->get();

      return view('test.index',['items'=>$items]);

    }

    public function post(Request $request){

        $items =DB::select('select * from api');

        return view('test.index',['items'=>$items]);

    }
    public function add(Request $request){

        return view('test.add');

    }
    public function create(Request $request){

        $param =[
            'type'=>$request->type,
            'price1'=>$request->price1,
            'price2'=>$request->price2,
        ];
        DB::table('api')->insert($param);

        return redirect('test');

    }
    public function edit(Request $request){
        $param = ['id'=>$request->id];
        $item =DB::table('api')->where('id',$request->id)->first();


        return view('test.edit',['form'=>$item]);

    }
    public function update(Request $request){
        $param =[
            'id'=>$request->id,
            //↑SQLSTATE[HY093]: Invalid parameter number で怒られたので挿入。
            'type'=>$request->type,
            'price1'=>$request->price1,
            'price2'=>$request->price2,
        ];

        DB::table('api')->where('id',$request->id)->update($param);

        return redirect('/test');
    }
    public function del(Request $request){

        $item =DB::table('api')->where('id',$request->id)->first();


        return view('test.del',['form'=>$item]);
    }
    public function remove(Request $request){

        DB::table('api')->where('id',$request->id)->delete();

        return redirect('/test');
    }
    public function show(Request $request){
        $id=$request->id;
        $items = DB::table('api')->where('id','<=',$id)->get();
        return view('test.show',['items'=>$items]);
    }


}
