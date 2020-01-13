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
@endsection