<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubTask extends Model
{
    use HasFactory;
     protected $fillable = ['subtask_name'];


    public function tasks () {
        return $this->belongsTo(Task::class);
    }
}
