<?php

namespace App\Http\Services;

use App\Http\Repository\InterfacesRepo\CacheRepositoryInterface;
use Illuminate\Support\Carbon;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class CacheRedisService
{
    private $cacheRepos;
    private static $cacheDrive = 'redis';


    public function __construct(
        CacheRepositoryInterface $cacheRepos
    ){
        $this->cacheRepos = $cacheRepos;
    }

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

    public static function rememberDbGetList($key, $table, $minutes)
    {
        try {
            return Cache::store(self::$cacheDrive)->remember($key, $minutes, function() use ($table) {

                $all = self::$cacheRepos->getAll();

                echo '<pre style="color:red";>$all === '; print_r($all);echo '</pre>';
                echo '<h3>Die is Called sad</h3>';die;
                // return DB::table($table)->get();
            });

            // return Cache::remember($key, $minutes, function() use ($table) {
            //     return DB::table($table)->get();
            // });
        } catch (\Throwable $th) {
            //throw $th;
        }
    }




    // $value = Cache::remember('users', $minutes, function() {
    //     return DB::table('users')->get();
    // });
}
