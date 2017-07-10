@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <h1>タスクリスト</h1>
    @if (count($task)>0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>状況</th>
                    <th>タスク</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($task as $tasklist)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $tasklist->id, ['id' => $tasklist->id]) !!}</td>
                        <td>{{ $tasklist->status }}</td>
                        <td>{{ $tasklist->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif 
    {!! link_to_route('tasks.create', '新規タスク追加',null, ['class' => 'btn btn-primary']) !!}
@endsection