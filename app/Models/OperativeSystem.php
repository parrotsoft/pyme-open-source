<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OperativeSystem extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'operative_systems';

    protected $fillable = [
        'user_id',
        'description',
        'active',
    ];

    protected $casts = [
        'user_id' => 'integer',
        'description' => 'string',
        'active' => 'boolean',
    ];
}
