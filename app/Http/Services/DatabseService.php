<?php

namespace App\Http\Services;

use App\Http\Repository\InterfacesRepo\CategoryRepositoryInterface;
use App\Http\Repository\InterfacesRepo\HomeRepositoryInterface;
// use Illuminate\Support\Carbon;
use App\Http\Models\OrderModel;
use App\Http\Models\Table1Model;
use App\Http\Models\Table2Model;
use App\Http\Models\Table3Model;
use App\Http\Models\Table4Model;

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
        // $table1 = Table1Model::find(2);

        $table1 = Table3Model::find(2)->table4;

        echo '<pre style="color:red";>$table1 === '; print_r($table1);echo '</pre>';
        echo '<h3>Die is Called - ser</h3>';die;

        // $table2 = Table2Model::find(4)->table1;
        // echo '<pre style="color:red";>$table2 === '; print_r($table2);echo '</pre>';




        echo '<h3>Die is Called - ser</h3>';die;
    }

    public function relationOneManySer()
    {
        // Has Many
        // $table3 = Table3Model::find(2)->table4;
        // echo '<pre style="color:red";>$table3 === '; print_r($table3);echo '</pre>';
        // echo '<h3>Die is Called - ser</h3>';die;

        // Belong to
        $table4 = Table4Model::find(15)->table3;
        echo '<pre style="color:red";>$table4 === '; print_r($table4);echo '</pre>';
        echo '<h3>Die is Called - ser</h3>';die;





        echo '<h3>Die is Called - ser</h3>';die;
    }
}
