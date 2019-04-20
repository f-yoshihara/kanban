@extends('layouts.app')

@section('title', 'Task List')


@section('content')
    <div class="container">
        <h1>
            <a href="{{ action('TaskController@create') }}" class="pull-right fs12">add new</a>
            Task List
        </h1>
        <ul>
            @forelse ($tasks as $task)
                <li><a href="{{ action('TaskController@show', $task->id) }}">{{ $task->title }}</a></li>
            @empty
                <li>No tasks yet</li>
            @endforelse
        </ul>
    </div>
@endsection