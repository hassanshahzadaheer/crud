@extends('layouts.app')

@section('content')
<h1 class="text-center">Create a new Task</h1>
<form action="{{ route('tasks.store') }}" method="POST">
            @csrf
    <input class="form-control" type="text" name="task_name" value="" placeholder="Make a todo" required>
    <br>
<input type="submit" class="btn btn-primary"  value="Save">
        </form>

@endsection
