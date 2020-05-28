<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // 测试 cdur
    public function index(){
        $res =  DB::table('work_order')->orderBy("id","desc")->paginate(5);
        return view('User.index')->with('res',$res);
    }
    public function create(){
        return view('User.create');
    }
    public function store(Request $request){
        $data = $request->input();
        $datauser['name'] = $data['name'];
        $datauser['area'] = $data['area'];
        $res = DB::table('work_order')->insert($datauser);
        if($res){
            return redirect('/user');
        }else{
            return error('/user/create');
        }
    }
    public function edit(Request $request,$id){
        $res =  DB::table('work_order')->where("id",$id)->first();
        return view('User.edit')->with('res',$res);
    }
    public function update(Request $request, $id)
    {
        $data = $request->input();
        $datauser['name'] = $data['name'];
        $datauser['area'] = $data['area'];
        $res = DB::table('work_order')->where("id",$id)->update($datauser);
        if($res){
            return redirect('/user');
        }else{
            return redirect('/user');
        }
    }
    public function destroy($id)
    {
        $res = DB::table('work_order')->where("id",$id)->delete();
        if($res){
            return redirect('/user');
        }else{
            return error('/user/create');
        }
    }
}
