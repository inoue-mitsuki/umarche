<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LifeCycleTestCotroller extends Controller
{
    //
    public function showServiceContainerTest(){
        app()->bind('lifeCycleTest', function(){
            return 'ライフサイクルテスト';
        });

        $test = app()->make('lifeCycleTest');

        //クラステスト
        // $message = new Message();
        // $sample = new Sample($message);
        // $sample->run();

        //サービスプロバイダ
        //関連するクラスをインスタンス化せずに使うことができる。
        app()->bind('sample', Sample::class);
        $sample = app()->make('sample');
        $sample->run();

        dd($test, app());
    }
}

class Sample{
    public $message;
    public function __construct(Message $message){
        $this->message = $message;
    }

    public function run(){
        $this->message->send();
    }
}

class Message{
    public function send(){
        echo('メッセージ表示');
    }
}