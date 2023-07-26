@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="text-left">Task Details</h1>
        <a href="{{ route('tasks.create') }}" class="btn btn-success">
            Create New Task <i class="bi bi-plus"></i>
        </a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Task Name</th>
                <th scope="col">Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
                <tr>
                    <th scope="row">{{ $task->id }}</th>
                    <td>{{ $task->task_name }}</td>
                    <td>
                        <a href="#" class="view-btn" data-taskid="{{ $task->id }}" data-task-name="{{ $task->task_name  }}">View</a>
                        <a  href="#" class="edit-btn text-warning" data-taskid="{{ $task->id }}" data-task-name="{{ $task->task_name  }}">Edit</a>
                        <!-- <a href="{{ route('tasks.edit', ['task' => $task->id]) }}">Edit</a> -->
                        <a href="#" class="delete-btn text-danger" data-taskid="{{ $task->id }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Modal for Task Details -->
    <div class="modal" id="viewTaskModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Task Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="taskModalContent">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal for Edit Task -->
<div class="modal" id="editTaskModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Task</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="editModalContent">
                <!-- The edit form will be dynamically loaded here -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



 <!-- Modal for Edit Task -->
<div class="modal" id="deleteTask" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Are You sure you want to delete this task</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="deleteModalContent">
                <!-- The edit form will be dynamically loaded here -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>





    <!-- load js modal -->
    @section('load_modal')
<script src="{{ asset('js/viewTaskModal.js') }}"></script>
@endsection
<!-- end js modal -->
@endsection
