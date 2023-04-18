<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\HomeService;


class HomeController extends Controller
{
    private $homeService;

    public function __construct(
        HomeService $homeService
    ){
        $this->homeService = $homeService;
    }

    public function index()
    {

        [$dataHome, $dataCategory] = $this->homeService->calcule();
        // echo '<pre style="color:red";>$dataHome === '; print_r($dataHome);echo '</pre>';
        // echo '<pre style="color:red";>$dataCategory === '; print_r($dataCategory);echo '</pre>';

        // echo '<h3>Die is Called - index 123</h3>';die;

        return compact('dataHome', 'dataCategory');
    }
}
