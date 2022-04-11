<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "users";

    public function taskUserMappings()
    {
        return $this->hasMany(Tasks_User::class, 'user_id');
    }
}
