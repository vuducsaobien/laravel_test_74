<?php

namespace App\Http\Controllers;

use App\Http\Services\CacheService;
use Illuminate\Http\Request;
use App\Http\Services\HomeService;

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


    public function index()
    {
        $titleView = 'Cache Redis List';
        $pathViewFun = $this->pathView . $this->pathViewExt . 'index';

        $items = $this->cacheService->getList();


        // echo '<pre style="color:red";>$data === '; print_r($data);echo '</pre>';
        return view($pathViewFun, compact('items', 'titleView'));

    }
}
