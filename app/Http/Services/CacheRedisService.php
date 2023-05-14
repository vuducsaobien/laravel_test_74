<?php

namespace App\Http\Services;

use App\Http\Repository\InterfacesRepo\CategoryRepositoryInterface;
use App\Http\Repository\InterfacesRepo\HomeRepositoryInterface;
use App\Jobs\UpdateCategoryDbJobA;
use App\Jobs\UpdateCategoryDbJobB;
use App\Jobs\UpdateCategoryDbJobC;
use Illuminate\Support\Carbon;
use App\Events\OrderShippedEvent;
use App\Http\Models\OrderModel;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class CacheRedisService
{
    // private $homeRepository;
    // private $categoryRepository;

    public function __construct(
        // HomeRepositoryInterface $homeRepository,
        // CategoryRepositoryInterface $categoryRepository
    ){
        // $this->homeRepository = $homeRepository;
        // $this->categoryRepository = $categoryRepository;
    }

    public static function set($key, $value = null)
    {
        try {
            Cache::store('redis')->set($key, $value);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public static function get($key)
    {
        try {
            return Cache::store('redis')->get($key);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public static function rememberDbGetList($key, $table, $id, $minutes)
    {
        try {
            return Cache::store('redis')->remember($key, $minutes, function() use ($table) {
                return DB::table($table)->get();
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
