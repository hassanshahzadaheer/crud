@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('tasks.update', ['task' => $task->id]) }}">
    @csrf

    @method('PUT')

    <input type="text" class="form-control" value=" {{ $task->task_name }}" name="task_name" required>
    <br>
    <input type="submit" value="Save" class="btn btn-success">
</form>


@endsection
