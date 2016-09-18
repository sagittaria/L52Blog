@extends('layouts.app')

@section('content')
    <h2 class="text-center"> {{ $article->title }} </h2>
    <div class="row">
    <div class="col-md-4 text-center"><span class="glyphicon glyphicon-tags"></span>&nbsp;&nbsp;标签</div>
    <div class="col-md-4 text-center"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;分类</div>
    <div class="col-md-4 text-center"><span class="glyphicon glyphicon-time"></span> {{ substr($article->updated_at,0,-3) }}</div>
    </div>
    <hr style="border:1px #99ccff solid; margin-top:6px;">
    {!! $content !!}
@endsection