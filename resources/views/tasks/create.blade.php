@extends('layouts.app')

@section('title', 'Task Detail')


@section('content')
    <div class="container">
        <h1>Add New</h1>
        <form method="post" action="{{ url('/tasks') }}">
            {{ csrf_field() }}
            <p>
                <input type="text" name="title" placeholder="title">
            </p>
            <p>
                <textarea name="note" placeholder="note"></textarea>
            </p>
            <p>
                <input type="submit" value="Add New">
            </p>
        </form>
    </div>
@endsection