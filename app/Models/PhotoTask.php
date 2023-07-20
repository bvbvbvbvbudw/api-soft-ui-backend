<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoTask extends Model
{
    use HasFactory;
    protected $table = 'photos_task';
    public $timestamps = false;
    protected $fillable = [
        'task_id',
        'photo'
    ];
    public function task()
    {
        return $this->belongsTo(Task::class, 'task_id');
    }
}
