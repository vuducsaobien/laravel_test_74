<?php

namespace App\Http\Services;

use App\Http\Repository\InterfacesRepo\CacheRepositoryInterface;
use App\Jobs\UpdateCategoryDbJobA;
use App\Jobs\UpdateCategoryDbJobB;
use App\Jobs\UpdateCategoryDbJobC;
use Illuminate\Support\Carbon;
use App\Events\OrderShippedEvent;
use App\Http\Models\OrderModel;

class CacheService
{
    private $cacheRepo;

    public function __construct(
        CacheRepositoryInterface $cacheRepository
    ){
        $this->cacheRepo = $cacheRepository;
    }

    public function getList($currentPage)
    {
        // echo '<pre style="color:red";>$currentPage === '; print_r($currentPage);echo '</pre>';


        $key = 'list-cache-page-' . $currentPage;

        // $data = CacheRedisService::get($key);
        // echo '<pre style="color:red";>$data === '; print_r($data);echo '</pre>';
        // die();

        $existKey = CacheRedisService::has($key);
        if (!$existKey) {
            CacheRedisService::set($key, $this->cacheRepo->getAllPagi($currentPage));
        }

        $data = CacheRedisService::get($key);


        // $data = $this->cacheRepo->getAllPagi($currentPage);

        // var_dump($existKey);
        // echo '<pre style="color:red";>$key === '; print_r($key);echo '</pre>';
        // echo '<pre style="color:red";>$data === '; print_r($data);echo '</pre>';
        // die();



        return $data;
        
    }


    public function cacheServiceCal($cacheId)
    {
        // CacheRedisService::set('abc', 123);
        // $aaa = CacheRedisService::get('abc');

        $data = $this->cacheRepo->getAll();

        echo '<pre style="color:red";>$data === '; print_r($data);echo '</pre>';
        echo '<h3>Die is Called - cache Service 21</h3>';die;
        // Phát ra event khi đơn hàng được vận chuyển




        
    }


}
