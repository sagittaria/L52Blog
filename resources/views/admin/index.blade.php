@extends('layouts.app')

@section('content')
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
            @if(mb_strlen($article->content)>155)
              {{ mb_substr($article->content,0,145,'utf-8') }}...
              <!-- 这个地方的问题可能是由于中文是两个字节的，所以两个中文字取(0,2]三个字节的话也许读到的是乱码错误的结果，于是索性显示不出来 -->
              <!-- 所以要用mb_strlen和mb_substr来代替strlen和substr -->
            @else
              {{ $article->content }}
            @endif
            </p>
        </li>
        @endforeach
    </ul>
    @else
    <p>No article yet.</p>
    @endif
@endsection

