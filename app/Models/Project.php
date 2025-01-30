<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['project_name'];

    public function tasks()
    {
        return $this->hasMany(Task::class, 'project_id', 'id');
    }
}
