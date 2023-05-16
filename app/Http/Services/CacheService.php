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
