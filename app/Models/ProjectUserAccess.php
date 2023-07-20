<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectUserAccess extends Model
{
    use HasFactory;
    protected $table = 'project_user_access';
    public $timestamps = false;
    protected $fillable = [
        'project_id',
        'user_id',
        'access_level'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
