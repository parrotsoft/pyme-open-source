<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Application extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'applications';

    protected $fillable = [
        'user_id',
        'operative_system_id',
        'category_id',
        'name',
        'description',
        'image',
        'link',
        'version',
        'star',
        'active',
    ];

    protected $casts = [
        'user_id' => 'integer',
        'operative_system_id' => 'integer',
        'category_id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'image' => 'string',
        'link' => 'string',
        'version' => 'string',
        'star' => 'integer',
        'active' => 'boolean',
    ];

}
