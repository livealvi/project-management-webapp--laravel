<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $table = "tasks";
    public $timestamps = false;


    public function taskUserMappings()
    {
        return $this->hasMany(Tasks_User::class, 'task_id');
    }
}
