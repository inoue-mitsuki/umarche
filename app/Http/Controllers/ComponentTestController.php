<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentTestController extends Controller
{
    //
    public function showComponent1(){
        //view\testsフォルダのcomponent-test1ファイルを参照する
        return view('tests.component-test1');
    }
    public function showComponent2(){
        return view('tests.component-test2');
    }
}
