<?php

namespace App\Http\Services;

use App\Http\Repository\InterfacesRepo\CategoryRepositoryInterface;
use App\Http\Repository\InterfacesRepo\HomeRepositoryInterface;
// use Illuminate\Support\Carbon;
use App\Http\Models\OrderModel;
use App\Http\Models\Table1Model;

class DatabseService
{
    private $cacheRepo;
    private $cateRepo;

    public function __construct(
        HomeRepositoryInterface $cacheRepo,
        CategoryRepositoryInterface $cateRepo
    ){
        $this->cacheRepo = $cacheRepo;
        $this->cateRepo = $cateRepo;
    }

    public function index()
    {
        // $time_start = microtime(true);
        // $cateData = $this->cateRepo->getSubquery();
        // $time_end = microtime(true);
        // $timeExcute = $time_end - $time_start;

        // echo '<pre style="color:red";>$timeExcute === '; print_r($timeExcute . ' seconds') ;echo '</pre>';

        $timeExcuteSub = $this->getSubquerySub();
        $timeExcuteJoin = $this->getJoinSub();

        $fasterRatio = ($timeExcuteJoin - $timeExcuteSub ) / $timeExcuteJoin * 100;
        echo '<pre style="color:red";>$fasterRatio === '; print_r($fasterRatio . ' %') ;echo '</pre>';

        echo '<h3>Die is Called - ser</h3>';die;
    }

    private function getSubquerySub()
    {
        $time_start = microtime(true);
        $cateData = $this->cateRepo->getSubquery();
        $time_end = microtime(true);
        $timeExcute = $time_end - $time_start;

        echo '<pre style="color:red";>$timeExcute getSubquerySub === '; print_r($timeExcute . ' seconds') ;echo '</pre>';
        
        return $timeExcute;
    }

    private function getJoinSub()
    {
        $time_start = microtime(true);
        $cateData = $this->cateRepo->getJoin();
        $time_end = microtime(true);
        $timeExcute = $time_end - $time_start;

        echo '<pre style="color:red";>$timeExcute getJoinSub === '; print_r($timeExcute . ' seconds') ;echo '</pre>';

        return $timeExcute;
    }

    public function relationOneOneSer()
    {

        // $table1 = Table1Model::find(2)->table2;

        $table1 = Table1Model::find(2);


        echo '<pre style="color:red";>$table1 === '; print_r($table1);echo '</pre>';

        echo '<h3>Die is Called - ser</h3>';die;
    }
}
