@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <h1>id: {{ $task->id }} のメッセージ編集ページ</h1>

<div class="row">
        <div class="col-xs-12">   
        <div class="col-lg-offset-3 col-lg-6">  
        <div class="col-lg-offset-2 col-md-8">
        <div class="col-lg-offset-2 col-sm-8">     
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
    <div class="form-group">
        {!! Form::label('task', 'タスク:') !!}
        {!! Form::text('content') !!}
    </div>
    <div class="form-group">
         {!! Form::label('status', '状況:') !!}
         {!! Form::text('status') !!}
    </div>
        {!! Form::submit('更新' ,['class' => 'btn btn-default']) !!}
    {!! Form::close() !!}
        </div>
        </div>
        </div>
        </div>
</div>
@endsection