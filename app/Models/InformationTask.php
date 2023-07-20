<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformationTask extends Model
{
    use HasFactory;
    protected $table = 'information_task';
    public $timestamps = false;
    protected $fillable = [
        'task_id',
        'user_assigned',
        'deadline',
        'complexity',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_assigned');
    }
    public function task()
    {
        return $this->belongsTo(Task::class, 'task_id');
    }
    public function complexity()
    {
        return $this->belongsTo(Complexity::class, 'complexity');
    }
}
