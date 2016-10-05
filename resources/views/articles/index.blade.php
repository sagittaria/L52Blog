@extends('layouts.app')

@section('content')
@if(count($articles) >0)
<ul style="list-style-type:none;padding:0;">
    @foreach ($articles as $article)
    <li style="border-bottom:1px solid #99ccff; margin-bottom:35px;">
        <h4><a href="{{ action('ArticleController@detail',[$article->id]) }}"> {{ $article->title }} </a><small style="margin-left:12px;"> {{ substr($article->updated_at,0,-3) }} </small></h4>
        <p>
        @if(mb_strlen($article->content)>201)
          {{ mb_substr($article->content,0,199) }}... <a href="{{ action('ArticleController@detail',[$article->id]) }}">全文</a>
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