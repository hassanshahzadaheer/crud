<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Task;


class TaskControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testCreateTask()
    {
        $response = $this->post('/tasks', [
            'task_name' => 'New Task',
        ]);

        $response->assertRedirect('/');

        $this->assertDatabaseHas('tasks', [
            'task_name' => 'New Task',
        ]);
    }

    public function testUpdateTask()
    {
        $task = Task::factory()->create();

        $response = $this->put("/tasks/{$task->id}", [
            'task_name' => 'Updated Task',
        ]);

        $response->assertRedirect('/');

        $this->assertDatabaseHas('tasks', [
            'id' => $task->id,
            'task_name' => 'Updated Task',
        ]);
    }

    public function testDeleteTask()
    {
        $task = Task::factory()->create();

        $response = $this->delete("/tasks/{$task->id}");

        $response->assertRedirect('/');

        $this->assertDatabaseMissing('tasks', [
            'id' => $task->id,
        ]);
    }
}
