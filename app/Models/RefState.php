<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefState extends Model
{
    protected $table = 'ref_states';
	protected $connection = 'mysql';

    public $timestamps = false;

    protected $guarded = [];
}
