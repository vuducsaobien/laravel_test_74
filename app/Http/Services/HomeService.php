<?php

namespace App\Http\Services;

use App\Http\Repository\InterfacesRepo\CategoryRepositoryInterface;
use App\Http\Repository\InterfacesRepo\HomeRepositoryInterface;
use App\Jobs\UpdateCategoryDbJobA;
use Illuminate\Support\Carbon;

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
        $emailJob = app()->makeWith(UpdateCategoryDbJobA::class, ['time' => $time])->delay(now()->addSeconds(3));
        dispatch($emailJob);


        $timeNow2 = Carbon::now()->toDateTimeString();
        echo '<pre style="color:red";>$timeNow2 === '; print_r($timeNow2);echo '</pre>';
        echo '<h3>Die is Called - update category DB - Success 123</h3>';die;
    }
}
