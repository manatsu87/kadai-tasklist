@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
        <h1>タスク新規追加ページ</h1>
        
        
 <div class="row">
     <div class="col-xs-12">   
     <div class="col-lg-offset-3 col-lg-6">  
     <div class="col-lg-offset-2 col-md-8">
        {!! Form::model($task,['route' => 'tasks.store']) !!}
        
        <div class="form-group">    
            {!! Form::label('task','タスク:')!!}
            {!! Form::text('content') !!}
        </div>
        
        <div class = "form-group">
             {!! Form::label('status', '状況:') !!}
             {!! Form::text('status') !!}
        </div>    
            {!!Form::submit('投稿',['class' => 'btn btn-primary'])!!}
        
         {!! Form::close() !!}  
    </div>
    </div>
    </div>
</div>
@endsection