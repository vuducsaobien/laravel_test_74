<?php

namespace App\Http\Controllers;

use App\Http\Services\CacheService;
use Illuminate\Http\Request;

class CachesController extends Controller
{
    private $cacheService;
    private $pathViewExt = '/pages/caches/';

    public function __construct(
        CacheService $cacheService
    ){
        parent::__construct();
        $this->cacheService = $cacheService;
    }


    public function index(Request $request)
    {
        $time_start = microtime(true);

        $titleView = 'Cache Redis List';
        $pathViewFun = $this->pathView . $this->pathViewExt . 'index';

        $currentPage = $request->query->all()['page'] ?? 1;

        $items = $this->cacheService->getList($currentPage);


        $time_end = microtime(true);
        $timeExcute = $time_end - $time_start;

        echo '<pre style="color:red";>$timeExcute === '; print_r($timeExcute);echo '</pre>';

        // echo '<pre style="color:red";>$items === '; print_r($items);echo '</pre>';
        echo '<h3>Die is Called </h3>';die;

        return view($pathViewFun, compact('items', 'titleView', 'timeExcute'));

    }
}
