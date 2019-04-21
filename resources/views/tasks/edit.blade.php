@extends('layouts.app')

@section('title', 'Task Edit')

@section('content')
    <h1>
        <a href="{{ url('/') }}" class="pull-right fs12">Back</a>
        Edit Task
    </h1>
    <form method="post" action="{{ url('/tasks', $task->id) }}">
        {{ csrf_field() }}
        {{ method_field('patch') }}
        <p>
            <input type="text" name="title" placeholder="title" value="{{ old('title', $task->title) }}">
            @if ($errors->has('title'))
                <span class="error">{{ $errors->first('title') }}</span>
            @endif
        </p>
        <p>
            <textarea name="note" placeholder="note">{{ old('note', $task->note) }}</textarea>
            @if ($errors->has('note'))
                <span class="error">{{ $errors->first('note') }}</span>
            @endif
        </p>
        <p>
            <input type="submit" value="Update">
        </p>
    </form>
@endsection