<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LifeCycleTestController extends Controller
{
    //
    public function showServiceContainerTest() {
        app()->bind('lifeCycleTest', function() {
            return 'ライフサイクルテスト';
        });

        $test = app()->make('lifeCycleTest');

        // サービスコンテナなしのパターン
        // $message = new Message();
        // $sample  = new Sample($message);
        // $sample->run();

        // サービスコンテナapp()ありのパターン
        //　下記サービスコンテナに登録
        app()->bind('sample', Sample::class);
        // 下記サービスコンテナから取り出す
        $sample = app()->make('sample');
        // その後にSampleクラスのrunメソッドを呼び出す
        $sample->run();

        dd($test, app());
    }
}

class Sample
{
    public $message;
    // 下記 引数にclassを入れることで自動的にインスタンスかしてくれる
    public function __construct(Message $message){
        $this->message = $message;
    }

    public function run() {
        $this->message->send();
    }
}

class Message
{
    public function send(){
        echo('メッセージ表示');
    }
}


