<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\HelloRequest;
use Validator;


class HelloController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::select('select * from people');
        return view('hello.index', ['items' => $items]);
    }
    
    public function add(Request $request)
    {
        return view('hello.add');
    }
    
    public function create(Request $request)
    {
        $param =[
        'name' => $request->name,
        'mail' => $request->mail,
        'age' => $request->age,
        ];
        DB::insert('insert into people ( name, mail, age)values(:name,:mail,:age)', $param);
        return redirect ('/hello');
    }
    
    public function edit(Request $request)
    {
        $param = ['id' => $request->id];
        $item = DB::select('select * from people where id = :id', $param);
        return view('hello.edit', ['form' => $item[0]]);
    }
    
    public function update(Request $request)
    {
        $param = [
           'id' => $request->id,
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
            ];
        DB::update('update people set name =:name, mail =:mail, age =:age where id = :id', $param);
        return redirect('/hello');
        }
    
    public function confirm(Request $request)
    {
        $param = ['id' => $request->id];
        $item = DB::select('select * from people where id = :id', $param);
        return view('hello.del', ['form' => $item[0]]);
    }
    
    public function del(Request $request)
    {
        $param = [ 'id' => $request->id,];
        DB::delete('delete from people where id = :id', $param);
        return redirect ('/hello');
    }
    
    public function post(Request $request)
    {   
        $rules = [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric',
            ];
            
        $messages = [
            'name.required' => '名前は入力してください。',
            'mail.email' => 'メールは入力してください。',
            'age.numeric' => '年齢は入力してください。',
            'age.min' => '年齢は0歳以上で記入してくだささい',
            'age.max' => '年齢は200歳以下で記入してくだささい',
            ];
            
        $validator = Validator::make($request->all(), $rules, $messages);
        
        $validator->sometimes('age', 'min:0', function($input){
            return !is_int('input->age');
        });
        $validator->sometimes('age', 'max:200', function($input){
            return !is_int('input->age');
        });
        
        if ($validator->fails()){
            return redirect('/hello')
            ->withErrors($validator)
            ->withInput();
        }
        return view('hello.index',['msg'=>'正しく入力されました。']);
    }
}
