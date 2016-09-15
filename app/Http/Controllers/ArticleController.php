<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;

class ArticleController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    //$this->middleware('auth'); //显示所有文章、显示某篇内容 不用验证
  }

  public function index(Request $request){
    $articles = Article::orderBy('updated_at', 'desc')->get();
    return view('articles/index',['articles' => $articles]);
  }

  public function detail($aid){
    $article = Article::findOrFail($aid);
    return view('articles/detail',['article'=>$article]);
  }

}
