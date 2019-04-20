@extends('layouts.app')

@section('title', 'Task Detail')


@section('content')
    <div class="container">
        <h1>
            <a href="{{ action('TaskController@index') }}" class="pull-right fs12">Back</a>
            {{$task->title}}
        </h1>
        <p>{!! nl2br(e($task->note)) !!}</p>
    </div>
@endsection