<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\TestRequest;

class TestController extends Controller
{
    public function test(Request $request)
    {
        return view('test.index', ['msg'=>'フォームを入力']);
    }
    
    public function post(TestRequest $request)
    {
        return view('test.index', ['msg'=>'値が正しく入力されました。']);
    }
}
