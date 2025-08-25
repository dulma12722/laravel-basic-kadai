<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller{

    //indexアクションの作成、ビューを表示する（フォルダ名.ファイル名）
    public function index() {
        return view('posts.index');
    }
}
