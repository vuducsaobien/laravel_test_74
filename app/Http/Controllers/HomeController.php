<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\HomeService;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    private $homeService;
    // private $updateJob;
    private $pathViewExt = '/pages/home/';

    public function __construct(
        HomeService $homeService
        // UpdateCategoryDbJob $updateJob
    ){
        parent::__construct();
        $this->homeService = $homeService;
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
        // echo '<h3>Die is Called - update category DB - Success</h3>';die;

        // $timeNow1 = Carbon::now()->toDateTimeString();

        // echo '<pre style="color:red";>$timeNow 1 - controlller === '; print_r($timeNow1);echo '</pre>';
        // $emailJob = (new UpdateCategoryDbJob($timeNow1))->delay(Carbon::now()->addSeconds(3));
        // // $emailJob = (new UpdateCategoryDbJob($timeNow1));

        // dispatch($emailJob);
        // echo '<h3>Die is Called - update category DB - Success</h3>';die;
    }

    public function redirectFunction()
    {

        // echo '<pre style="color:red";>$data === '; print_r($data);echo '</pre>';
        echo '<h3>Die is Called - redirectFunction</h3>';die;

        $pathViewFun = $this->pathView . $this->pathViewExt . 'index';
        return compact('dataHome', 'dataCategory', 'pathViewFun');

    }
}
