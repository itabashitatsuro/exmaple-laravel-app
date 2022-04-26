<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use App\Services\TweetService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View; // Facadesを利用する
use Illuminate\View\Factory;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Factory $factory, TweetService $tweetService)
    {
        // 基本
        // return view('tweet.index', ['name' => 'Laravel']);

        // Facadeで呼び出し
        // return View::make('tweet.index', ['name' => 'Laravel']);

        // Factoryをインジェクションして呼び出す
        // return $factory->make('tweet.index', ['name' => 'Laravel']);

        // $tweets = Tweet::all();
        // $tweets = Tweet::all()->sortByDesc('created_at');
        // $tweets = Tweet::orderBy('created_at', 'DESC')->get();

        // dd($tweets);
        // dump die・・・その場で処理を中断して、変数の内容などを出力してくれる
        // return view('tweet.index')
        //       ->with('name', 'latavel')
        //       ->with('version', '8');

        // サービスコンテナ
        // $tweetService = new TweetService();
        $tweets = $tweetService->getTweets();

        return view('tweet.index')
        ->with('tweets', $tweets);
    }
}
