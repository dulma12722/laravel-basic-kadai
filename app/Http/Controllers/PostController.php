<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// クエリビルダ（DBファサードのuse宣言）
use Illuminate\Support\Facades\DB;

class PostController extends Controller{

    //indexアクションの作成、ビューを表示する（フォルダ名.ファイル名）
    public function index() {

        // postsテーブルからすべてのデータを取得し、変数$postsに代入する
        $posts = DB::table('posts')->get();

        // 変数$postsをposts/index.blade.phpファイルに渡す
        return view('posts.index', compact('posts'));
    }
}
