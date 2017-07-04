@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
        <h1>メッセージ新規作成ページ</h1>
        {!! Form::model($task,['route' => 'tasks.store']) !!}
        
            {!! Form::label('task','タスク:')!!}
            {!! Form::text('task') !!}
            
            {!!Form::submit('投稿')!!}
        
         {!! Form::close() !!}  

@endsection