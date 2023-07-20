<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskComment extends Model
{
    use HasFactory;

    protected $table = 'task_comment';
    public $timestamps = false;
    protected $fillable = [
        'task_id',
        'comment_id',
    ];
    public function comment()
    {
        return $this->belongsTo(Comment::class, 'comment_id', 'id');
    }
    public function task()
    {
        return $this->belongsTo(Task::class, 'task_id');
    }
    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }

}
