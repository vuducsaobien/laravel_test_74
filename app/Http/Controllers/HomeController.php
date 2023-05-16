<?php

namespace App\Http\Controllers;

use App\Http\Models\OrderModel;
use App\Http\Services\CacheService;
use Illuminate\Http\Request;
use App\Http\Services\HomeService;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    private $homeService;
    private $cacheService;
    private $pathViewExt = '/pages/home/';

    public function __construct(
        HomeService $homeService,
        CacheService $cacheService
    ){
        parent::__construct();
        $this->homeService = $homeService;
        $this->cacheService = $cacheService;
    }

    public function index()
    {
        [$dataHome, $dataCategory] = $this->homeService->calcule();

        $pathViewFun = $this->pathView . $this->pathViewExt . 'index';

        return compact('dataHome', 'dataCategory', 'pathViewFun');
    }

    public function homeQueue()
    {
        $timeNow1 = Carbon::now()->toDateTimeString();

        $this->homeService->updateJob($timeNow1);
        echo '<h3>Die is Called - update category DB - Success</h3>';die;
    }

    public function redirectFunction()
    {

        // echo '<pre style="color:red";>$data === '; print_r($data);echo '</pre>';
        echo '<h3>Die is Called - redirectFunction</h3>';die;

        $pathViewFun = $this->pathView . $this->pathViewExt . 'index';
        return compact('dataHome', 'dataCategory', 'pathViewFun');

    }

    public function evenListeneerShip($orderId)
    {
        $this->homeService->eventShip($orderId);
    }

    public function cacheRedis($cacheId)
    {
        $data = $this->cacheService->cacheServiceCal($cacheId);
        // echo '<pre style="color:red";>$data === '; print_r($data);echo '</pre>';
        echo '<h3>Die is Called - cacheRedis</h3>';die;

    }
}
