<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'task';

    protected $fillable = [
        'name',
        'user_id',
        'status_id',
        'project_id',
    ];

    public function comments(){
        return $this -> belongsToMany(Comment::class, 'task_comment', 'task_id', 'comment_id');
    }
    public function assigneds(){
        return $this->belongsToMany(User::class, 'task_user', 'task_id', 'user_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function rolesfind()
    {
        return $this -> belongsTo(Role::class);
    }
    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }

    public function status(){
        return $this -> belongsTo(Status::class);
    }
}
