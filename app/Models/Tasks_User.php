<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks_User extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "tasks__users";

    public function task()
    {
        return $this->belongsTo(Task::class, 'task_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // public function getTask()
    // {
    //     return $this->task()->get();
    // }

    // public function getTaskUser()
    // {
    //     return $this->hasMany(Tasks_User::class, 'id');
    // }
}
