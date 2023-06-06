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

class HomeService
{
    private $homeRepository;
    private $categoryRepository;

    public function __construct(
        HomeRepositoryInterface $homeRepository,
        CategoryRepositoryInterface $categoryRepository
    ){
        $this->homeRepository = $homeRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function calcule()
    {

        $dataHome = $this->homeRepository->getHome()->toArray();
        $dataCategory = $this->categoryRepository->getCategory()->toArray();

        return [$dataHome, $dataCategory];
    }

    public function updateJob($time)
    {
        $timeNow1 = Carbon::now()->toDateTimeString();
        echo '<pre style="color:red";>$timeNow1 === '; print_r($timeNow1);echo '</pre>';
        // $paramsSend = ['time pass - 1', 'time pass - 12'];

        // $emailJob = app()->makeWith(UpdateCategoryDbJobA::class, ['time' => $time])->delay(now()->addSeconds(3));
        // dispatch($emailJob);

        // $jobA = app()->makeWith(UpdateCategoryDbJobA::class, ['time' => $time]);
        // $jobB = app()->makeWith(UpdateCategoryDbJobB::class, ['time' => $time]);
        // $jobC = app()->makeWith(UpdateCategoryDbJobC::class, ['time' => $time]);

        $jobA = app()->make(UpdateCategoryDbJobA::class);
        $jobB = app()->make(UpdateCategoryDbJobB::class);
        $jobC = app()->make(UpdateCategoryDbJobC::class);

        // dispatch($emailJob);
        $jobA->withChain([$jobB, $jobC])->dispatch();

        // $jobB->dispatch()->onQueue('default');


        echo '<h3>Die is Called - update category DB - Success 123</h3>';die;
    }

    public function eventShip($orderId)
    {
        // Phát ra event khi đơn hàng được vận chuyển
        
        $order = OrderModel::find($orderId);
        event(new OrderShippedEvent($order, $orderId));
    }

}
