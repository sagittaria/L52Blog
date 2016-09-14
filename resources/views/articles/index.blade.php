@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Articles</div>

                <div class="panel-body">
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection