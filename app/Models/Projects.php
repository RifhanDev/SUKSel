<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'projects';

    protected $fillable = ['project_name', 'status', 'start_date', 'end_date'];

    protected $guarded = ['id'];

    protected $casts = ['start_date' => 'datetime','end_date' => 'datetime'];
}
