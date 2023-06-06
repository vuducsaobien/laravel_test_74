<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class CacheRedisModel extends Model
{
    public $timestamps = false;

    public $table = 'cache_redis';
    
}
