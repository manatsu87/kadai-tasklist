@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <h1>タスクリスト</h1>
    @if (count($task)>0)
        <ul>
            @foreach ($task as $tasklist)
            <li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{ $task->status }} > {{ $task->content }}</li>
            @endforeach
        </ul>    
    @endif    
@endsection