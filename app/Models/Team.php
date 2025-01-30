<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['name', 'email', 'mobile', 'status'];

    public function tasks()
    {
        return $this->hasMany(Task::class, 'member_id', 'id');
    }
}
