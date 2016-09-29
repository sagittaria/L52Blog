<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;

class AdminController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth'); //须登录
  }

  public function index(Request $request)
  {
    if($searchStr=$request->input('searchStr')){
      $articles = Article::where('title','like','%'.$searchStr.'%')->orderBy('updated_at', 'desc')->get();
    }else{
      $articles = Article::orderBy('updated_at', 'desc')->get();
    }    
    return view('admin/index',['articles' => $articles]);
  }

  public function create()
  {
    return view('admin/create');
  }

  public function store(Request $request)
  {
    $article = new Article;
    $article->title = $request->input('title');
    $article->content = $request->input('content');
    $article->save();
    return redirect('/admin/articles')->with('success','新增成功！');
  }

  public function edit($aid)
  {
    $article = Article::findOrFail($aid);
    return view('admin/edit',['article'=>$article]);
  }

  public function update(Request $request, $aid)
  {
    Article::where('id',$aid)->update($request->input('Article'));
    return redirect('/admin/articles')->with('success','更新成功！');
  }

  public function destroy($aid)
  {
     Article::find($aid)->delete();
     return redirect('/admin/articles')->with('success','删除成功！');
  }

}
