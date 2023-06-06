<?php

namespace App\Http\Services;

use App\Http\Repository\InterfacesRepo\CacheRepositoryInterface;
use Illuminate\Support\Carbon;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class CacheRedisService
{
    private static $cacheDrive = 'redis';

    public static function set($key, $value = null)
    {
        try {
            Cache::store(self::$cacheDrive)->set($key, $value);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public static function get($key)
    {
        try {
            return Cache::store(self::$cacheDrive)->get($key);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public static function has($key)
    {
        try {
            return Cache::store(self::$cacheDrive)->has($key);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

}
