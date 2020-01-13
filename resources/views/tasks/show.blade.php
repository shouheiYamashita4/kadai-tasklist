@extends('layouts.app')

@section('content')
    <h1> id = {{ $task->id }} | Task detail</h1>
    
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>Task</th>
            <th>{{ $task->content }}</th>
        </tr>
    </table>
    
    {!! link_to_route('tasks.edit', 'Modify this task', ['id' => $task->id], ['class' => 'btn btn-light']) !!}
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@endsection