@extends('layouts.app')

@section('title', 'Task Detail')


@section('content')
    <h1>
        <a href="{{ action('TaskController@index') }}" class="pull-right fs12">Back</a>
        {{$task->title}}
    </h1>
    <p>{!! nl2br(e($task->note)) !!}</p>
    <h2>Steps</h2>
    <ul>
        @forelse ($task->steps as $step)
            <h3>{{ $step->title }}</h3>
            <li>{{ $step->note }}</li>
        @empty
            <li>No step yet</li>
        @endforelse
    </ul>

    <h2>Add New Step</h2>
    <form method="post" action="{{ action('StepController@store', $task->id) }}">
        {{ csrf_field() }}
        <p>
            <input type="text" name="title" placeholder="title" value="{{ old('title') }}">
            @if($errors->has('title'))
                <span class="error">{{ $errors->first('title') }}</span>
            @endif
        </p>
        {{ Form::select('order', $order_list, null, ['data-rel'=>'chosen']) }}
        <p>
            <textarea name="note" placeholder="note"></textarea>
        </p>
        <p>
            <input type="submit" value="Add Step">
        </p>
    </form>
@endsection