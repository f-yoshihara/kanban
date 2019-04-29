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
                <li>
                    <a href="{{ action('TaskController@show', $task->id) }}">{{ $task->title }}</a>
                    <a href="{{ action('TaskController@edit', $task->id) }}" class="fs12">[edit]</a>
                    <form action="{{ action('TaskController@destroy', $task->id) }}" id="form_{{ $task->id }}" method="post" style="display:inline">
                        {{ csrf_field() }}
                        {{ method_field('delete') }}
                        <a href="#" data-id="{{ $task->id }}" onclick="deleteTask(this);" class="fs12">[x]</a>
                    </form>
                </li>
            @empty
                <li>No tasks yet</li>
            @endforelse
        </ul>
    </div>
    <script>
        function deleteTask(e) {
            'use strict';

            if (confirm('are you sure?')) {
                document.getElementById('form_' + e.dataset.id).submit();
            }
        }
    </script>
@endsection