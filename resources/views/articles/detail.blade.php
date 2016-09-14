@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Articles</div>

                <div class="panel-body">
                    show one article.<br>
                    <h4> {{ $article->title }} </h4>
                    <p> {{ $article->content }} </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection