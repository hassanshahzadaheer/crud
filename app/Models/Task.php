<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

     protected $fillable = ['task_name', 'task_description', 'task_estimated_time'];
    public function subtasks()
    {
        return $this->hasMany(SubTask::class);
    }
}
