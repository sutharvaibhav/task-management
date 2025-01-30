<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['status', 'priority', 'project_id', 'member_id', 'task_description', 'task_heading', 'task_deadline', 'assigned_date'];

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id', 'id');
    }
    public function member()
    {
        return $this->belongsTo(Team::class, 'member_id', 'id');
    }
}
