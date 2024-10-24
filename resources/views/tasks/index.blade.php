@extends('layouts.app')

@section('content')
        <h1>Tasks:</h1>

        {{-- Display all tasks --}}
        @foreach ($tasks as $task)
        <div class="card @if ($task->isCompleted())
            border-light
            @else text-bg-light
        @endif" style="margin-bottom: 15px">
            <div class="card-body">
                <p>
                    @if($task->isCompleted())
                    <span class="badge text-bg-success">Done</span>
                    @endif
                    {{ $task->description }}
                </p>
                <form action="/tasks/{{ $task->id }}" method="POST">
                    @method('PATCH')
                    @csrf
                    @if (!$task->isCompleted())
                    <button class="btn btn-light" input="submit">Done</button>
                    @endif
                </form>
            </div>
        </div>
        @endforeach
<a href="/tasks/create" class="btn btn-primary btn-lg">New task</a>
@endsection
