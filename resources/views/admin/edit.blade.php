@extends('layouts.app')

@section('content')
<div class="container editor">
  <form method="post" action="{{ action('AdminController@update',[$article->id]) }}" class="form-horizontal">
    {{ method_field('PUT') }}
    {{ csrf_field() }}
    <div class="form-group">
      <div class="col-md-9">
        <input class="form-control" type="text" name="Article[title]" value="{{ $article->title }}">        
      </div>
      <div class="col-md-3">        
        <select class="form-control" name="Article[catalog_id]" id="catalog">
          <option value="{{ $article->catalog->id }}">{{ $article->catalog->name }}</option>
          @foreach( $catalogs as $catalog)
          <option value="{{ $catalog->id }}">{{ $catalog->name }}</option>
          @endforeach
        </select>
      </div>
    </div>
    <textarea class="form-control" name="Article[content]" id='myEditor'>{{ $article->content }}</textarea>
    <button class="btn btn-primary">发表</button>
  </form>
</div>
@endsection