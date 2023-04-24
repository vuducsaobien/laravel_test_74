<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\HomeService;


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

        [$dataHome, $dataCategory] = $this->homeService->calcule();
        // echo '<pre style="color:red";>$dataHome === '; print_r($dataHome);echo '</pre>';
        // echo '<pre style="color:red";>$dataCategory === '; print_r($dataCategory);echo '</pre>';


        // return compact('dataHome', 'dataCategory');

        // echo '<pre style="color:red";>$this->pathView === '; print_r($this->pathView);echo '</pre>';
        // echo '<pre style="color:red";>$this->pathViewExt === '; print_r($this->pathViewExt);echo '</pre>';
        // echo '<h3>Die is Called - index 123</h3>';die;

        return view($this->pathView . $this->pathViewExt . 'index', compact(
            'dataHome', 'dataCategory'
        ));
    }
}
