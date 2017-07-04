@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <h1>タスクリスト</h1>
    @if (count($task)>0)
        <ul>
            @foreach ($task as $tasklist)
            <li>{{$tasklist->task}}</li>
            @endforeach
        </ul>    
    @endif    
    
    @foreach($task as $tasklist)
        <li>{!! link_to_route('tasks.show',$tasklist->id,['id'=> $tasklist->id]) !!} : {{$tasklist->task}}</li>
    @endforeach
@endsection