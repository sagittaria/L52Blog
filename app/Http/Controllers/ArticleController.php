<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ArticleController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index(Request $request){
    $articles = $request->user()->articles()->get();
    return view('articles/index',['articles' => $articles]);
  }
}
