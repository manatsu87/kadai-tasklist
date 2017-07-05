@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <h1>id: {{ $task->id }} のメッセージ編集ページ</h1>

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('task', 'タスク:') !!}
        {!! Form::text('task') !!}
        
         {!! Form::label('status', '状態:') !!}
         {!! Form::text('status') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}
@endsection