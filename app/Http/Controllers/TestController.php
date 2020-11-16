<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;


class TestController extends Controller
{
    public function index(Request $request){

          $items =DB::select('select * from api');

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
        DB::insert('insert into api (type,price1,price2) values (:type,:price1,:price2)', $param);

        return redirect('test');

    }
    public function edit(Request $request){
        $param = ['id'=>$request->id];
        $item =DB::select('select * from api where id =:id',$param);


        return view('test.edit',['form'=>$item[0]]);

    }
    public function update(Request $request){
        $param =[
            'id'=>$request->id,
            //↑SQLSTATE[HY093]: Invalid parameter number で怒られたので挿入。
            'type'=>$request->type,
            'price1'=>$request->price1,
            'price2'=>$request->price2,
        ];

        DB::update('update api set type =:type ,price1 =:price1 ,price2 =:price2 where id = :id',$param);

        return redirect('/test');
    }
    public function del(Request $request){

        $param = ['id'=>$request->id];
        $item =DB::select('select * from api where id =:id',$param);


        return view('test.del',['form'=>$item[0]]);
    }
    public function remove(Request $request){

        $param = ['id'=>$request->id];
        $item =DB::delete('delete from api where id =:id',$param);


        return redirect('/test');
    }


}
