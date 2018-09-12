@extends('layout')

@section('content')
        <div class="container">
                <ul>
                @foreach($tasks as $task)
                <li><a href="tasks/{{ $task->id }}">{{ $task->body }}</a></li>
                @endforeach
                </ul>
        </div>
@endsection
