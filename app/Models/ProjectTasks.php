<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTasks extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'project_tasks';

    protected $fillable = ['fk_project_id', 'task_name', 'task_description', 'start_date', 'end_date', 'status', 'participant', 'created_at', 'updated_at'];

    protected $guarded = ['id'];

    protected $casts = ['start_date' => 'datetime','end_date' => 'datetime'];
}
