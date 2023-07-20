<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskDescription extends Model
{
    use HasFactory;
    protected $table = 'task_description';
    public $timestamps = false;
    protected $fillable = [
        'task_id',
        'description'
    ];

    public function task(){
        return $this->belongsTo(Task::class, 'task_id');
    }
}
