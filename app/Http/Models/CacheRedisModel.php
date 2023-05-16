<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CacheRedisModel extends Model
{
    // use HasFactory;

    public $table = 'cache_redis';

    public function __construct()
    {
        // echo '<h3>Die is Called - HomeModel</h3>';die;
    }

    
}
