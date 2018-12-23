@extends('layouts.app')

@section('content')
    <h1> id = {{ $task->id }} のタスク詳細ページ</h1>
    
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">タスク</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->content }}</td>
                </tr>
            </tbody>
        </table>
        
        {!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $task->id],['class' => 'btn btn-light']) !!}
        {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
            {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
            
@endsection