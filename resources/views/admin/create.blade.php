@extends('layouts.app')

@section('content')
<div class="container editor">
  <form method="post" action="{{ action('AdminController@store') }}" class="form-horizontal">
    {{ csrf_field() }}
    <div class="form-group">
      <div class="col-md-9">        
        <input class="form-control" type="text" id="title" name="title">
      </div>
      <div class="col-md-3">        
        <select class="form-control" name="catalog_id" id="catalog">
          @foreach( $catalogs as $catalog)
            <option value="{{ $catalog->id }}">{{ $catalog->name }}</option>
          @endforeach
        </select>
      </div>
    </div>
    <textarea class="form-control" name="content" id='myEditor'></textarea>
    <button class="btn btn-primary">发表</button>
  </form>
</div>
@endsection