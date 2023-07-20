<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';

    protected $fillable = [
        'id',
        'description',
        'user_id',
        'created_at',
        'updated_at',
    ];

    public function showid()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
