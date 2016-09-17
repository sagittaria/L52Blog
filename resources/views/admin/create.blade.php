@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Articles</div>

                <div class="panel-body">
                    create-page<br>
                    <form method="post" action="{{ action('AdminController@store') }}">
                      {{ csrf_field() }}
                      <input type="text" name="title" >
                      <textarea name="content"></textarea>
                      <button>发表</button>
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


