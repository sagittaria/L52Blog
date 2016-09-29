@extends('layouts.app')

@section('content')
<div class="row">
<div class="container editor">
  <form method="post" action="{{ action('AdminController@store') }}">
    {{ csrf_field() }}
    <div class="form-group">
      <input class="form-control" type="text" name="title">
    </div>
    <div class="form-group">
      <textarea class="form-control" name="content" id='myEditor'></textarea>
    </div>
    <button class="btn btn-primary">发表</button>
  </form>
</div>
</div>
@endsection