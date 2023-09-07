@extends('layouts.app')

@section('content')

 @if ($task)
        <p>{{ $task->task_name }}</p>
        <form method="POST" action="" onsubmit="return confirm('Are you sure you want to delete this task?')">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    @else
        <p>Task not found.</p>
    @endif

@endsection
