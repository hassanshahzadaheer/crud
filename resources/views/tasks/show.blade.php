@extends('layouts.app')

@section('content')

 @if ($task)
        <p>{{ $task->task_name }}</p>
        <a href="{{ route('tasks.edit', ['task' => $task->id]) }}">Edit</a>
        <form method="POST" action="" onsubmit="return confirm('Are you sure you want to delete this task?')">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    @else
        <p>Task not found.</p>
    @endif

@endsection
