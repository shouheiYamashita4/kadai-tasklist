@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <h2>{{ Auth::user()->name }}'s Tasks</h2>
        <!--@if(count($tasks) > 0)-->
            <!--<table class="table table-striped">-->
            <!--<thead>-->
            <!--    <tr>-->
            <!--        <th>id</th>-->
            <!--        <th>Status</th>-->
            <!--        <th>Task</th>-->
            <!--    </tr>-->
            <!--</thead>-->
            @include('tasks.tasks', ['tasks' => $tasks])
            <!--</table>-->
        <!--@endif-->
    
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Tasklist</h1>
                {!! link_to_route('signup.get', 'Sign Up', [], ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection