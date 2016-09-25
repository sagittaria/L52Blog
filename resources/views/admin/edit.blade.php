@extends('layouts.app')

@section('content')
<div class="row" style="margin-top:0">
<div class="container editor">
  <form method="post" action="{{ action('AdminController@update',[$article->id]) }}">
    {{ method_field('PUT') }}
    {{ csrf_field() }}
    <div class="form-group">
      <input class="form-control" type="text" name="Article[title]" value="{{ $article->title }}">
    </div>
    <div class="form-group">
      <textarea class="form-control" name="Article[content]" id='myEditor'>{{ $article->content }}</textarea>
    </div>
    <button class="btn btn-primary">发表</button>
  </form>
</div>
</div>
@endsection


