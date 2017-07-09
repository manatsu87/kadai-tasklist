@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <h1>タスクリスト</h1>
    @if (count($task)>0)
        <ul>
            @foreach ($task as $tasklist)
            <li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{ $task->status }} > {{ $content->content }}</li>
            @endforeach
        </ul>    
    @endif 
    {!! link_to_route('tasks.create', '新規タスク追加') !!}
@endsection