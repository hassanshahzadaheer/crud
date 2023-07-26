@extends('layouts.app')

@section('content')
<form action="{{ route('tasks.store') }}" method="POST" class="needs-validation" novalidate>
        @csrf
        <div class="form-group">
                 <label for="task-name">Task</label>
                <input class="form-control @error('task_name') is-invalid @enderror" type="text" name="task_name" value="{{ old('task_name') }}" placeholder="Make a todo" required>
                @error('task_name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror


        </div>

        <div class="form-group">
                <label for="task-description">Task Description</label>
                <textarea name="task_description" id="task_description" class="form-control @error('task_description') is-invalid @enderror" cols="10" rows="5" required></textarea>
                @error('task_description')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>

        <div class="form-group">
                <label for="task-time">Estimated Time</label>
                <input class="form-control @error('estimated_time') is-invalid @enderror" type="number" name="estimated_time" id="estimated_time" placeholder="50" required>
                @error('estimated_time')
                        <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
</form>

<script>
        (function() {
                'use strict';

                // fetch form
                var forms = document.querySelectorAll(".needs-validation");

                Array.prototype.slice.call(forms)
                        // loop through form
                        .forEach(function(form) {
                                // submit event listener
                                form.addEventListener('submit', function(event) {
                                        // check the validation
                                        if (!form.checkValidity()) {
                                                event.preventDefault();
                                                event.stopPropagation();
                                        }
                                        //        add the validation
                                        form.classList.add('was-validated');
                                }, false);
                        });

        })();
</script>
@endsection
