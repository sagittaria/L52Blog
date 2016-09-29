@extends('layouts.app')

@section('content')

@if(Session::has('success'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  {{ Session::get('success') }}
</div>
@endif
    @if(count($articles) >0)
    <ul style="list-style-type:none;padding:0;">
        @foreach ($articles as $article)
        <li style="border-bottom:1px solid #99ccff;">
            <h4><a href="{{ action('ArticleController@detail',[$article->id]) }}" > {{ $article->title }} </a>
                <form action="{{ action('AdminController@destroy',[$article->id]) }}" method="POST" style="display: inline;">  
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-xs btn-danger pull-right">删除</button>
                </form>
                <a href="{{ action('AdminController@edit',[$article->id]) }}" class="btn btn-xs btn-primary pull-right" style="margin-right:7px;">编辑</a>
            </h4>
            <p>
            @if(strlen($article->content)>155)
              {{ substr($article->content,0,154) }}...
            @else
              {{  $article->content }}
            @endif
            </p>
        </li>
        @endforeach
    </ul>
    @else
    <p>No article yet.</p>
    @endif
@endsection

