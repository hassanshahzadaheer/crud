@extends('layouts.app')

@section('content')

<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Task Name</th>
            <th scope="col">Options</th>
            <a href=" {{ route('tasks.create') }}  ">Create New Task</a>
        </tr>
    </thead>
    @foreach($tasks as $task)
    <tbody>
        <tr>
            <th scope="row">{{ $task->id }}</th>
            <td>{{ $task->task_name }}</td>
            <td>
                <a href=" {{route('tasks.show',['task' =>  $task->id])}}   ">View</a>
                <a href="{{ route('tasks.edit', ['task' => $task->id]) }}">Edit</a>
                <a class="text-danger" href="{{ route('tasks.delete', ['task' => $task->id]) }}">Delete</a>
            </td>
        </tr>
    </tbody>
    @endforeach
</table>
@endsection
