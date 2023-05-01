<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\HomeService;
use App\Jobs\UpdateCategoryDbJob;
use Illuminate\Support\Carbon;
class HomeController extends Controller
{
    private $homeService;

    private $pathViewExt = '/pages/home/';

    public function __construct(
        HomeService $homeService
    ){
        parent::__construct();
        $this->homeService = $homeService;
    }

    public function index()
    {
        $timeNow1 = Carbon::now()->toDateTimeString();

        echo '<pre style="color:red";>$timeNow 1 - controlller === '; print_r($timeNow1);echo '</pre>';
        $emailJob = (new UpdateCategoryDbJob($timeNow1))->delay(Carbon::now()->addSeconds(3));
        // $emailJob = (new UpdateCategoryDbJob($timeNow1));

        dispatch($emailJob);
        echo '<h3>Die is Called - update category DB - Success</h3>';die;

        [$dataHome, $dataCategory] = $this->homeService->calcule();
        // echo '<pre style="color:red";>$dataHome === '; print_r($dataHome);echo '</pre>';
        // echo '<pre style="color:red";>$dataCategory === '; print_r($dataCategory);echo '</pre>';


        // return compact('dataHome', 'dataCategory');

        // echo '<pre style="color:red";>$this->pathView === '; print_r($this->pathView);echo '</pre>';
        // echo '<pre style="color:red";>$this->pathViewExt === '; print_r($this->pathViewExt);echo '</pre>';
        // echo '<h3>Die is Called - index 123</h3>';die;

        $pathViewFun = $this->pathView . $this->pathViewExt . 'index';

        return compact('dataHome', 'dataCategory', 'pathViewFun');

        // return view($pathViewFun, compact(
        //     'dataHome', 'dataCategory'
        // ));
    }

    public function homeQueue()
    {
        $timeNow1 = Carbon::now()->toDateTimeString();

        echo '<pre style="color:red";>$timeNow 1 === '; print_r($timeNow1);echo '</pre>';
        $emailJob = (new UpdateCategoryDbJob($timeNow1))->delay(Carbon::now()->addSeconds(3));
        // $emailJob = (new UpdateCategoryDbJob($timeNow1));

        dispatch($emailJob);
        echo '<h3>Die is Called - update category DB - Success</h3>';die;

    }

    public function redirectFunction()
    {

        // echo '<pre style="color:red";>$data === '; print_r($data);echo '</pre>';
        echo '<h3>Die is Called - redirectFunction</h3>';die;

        $pathViewFun = $this->pathView . $this->pathViewExt . 'index';
        return compact('dataHome', 'dataCategory', 'pathViewFun');

    }
}
