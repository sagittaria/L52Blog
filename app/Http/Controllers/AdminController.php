<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;
use App\Catalog;

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
    $catalogs = Catalog::orderBy('id')->get();
    return view('admin/create',['catalogs' => $catalogs]);
  }

  public function store(Request $request)
  {
    $article = new Article;
    $article->title = $request->input('title');
    $article->content = $request->input('content');
    $article->catalog_id = $request->input('catalog_id');
    $article->save();
    return redirect('/admin/articles')->with('success','新增成功！');
  }

  public function edit($aid)
  {
    $article = Article::findOrFail($aid);
    $catalogs = Catalog::where('id','<>',$article->catalog_id)->orderBy('id')->get();
    return view('admin/edit',['article'=>$article,'catalogs' => $catalogs]);
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
