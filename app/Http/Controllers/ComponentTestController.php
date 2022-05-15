<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentTestController extends Controller
{
    //
    public function showComponent1(){
        $message = 'aaa';
        //view/testsフォルダのcomponent-test1ファイルを参照する
        //compactでmessage上で定義したmessage関数を渡す
        return view('tests.component-test1',
        compact('message'));
    }
    public function showComponent2(){
        return view('tests.component-test2');
    }
}
