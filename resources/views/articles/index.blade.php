@extends('layouts.app')

@section('content')
show all articles here.<br>
@if(count($articles) >0)
<ul>
    @foreach ($articles as $article)
    <li>
        <h4><a href="{{ action('ArticleController@detail',[$article->id]) }}"> {{ $article->title }} </a></h4>
        <p> {{ $article->content }} </p>
    </li>
    @endforeach
</ul>
@else
<p>No article yet.</p>
@endif
@endsection