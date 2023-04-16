<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Repository\HomeRepository;
use App\Http\Repository\CategoryRepository;

class HomeController extends Controller
{
    private $homeRepository;
    private $categoryRepository;

    public function __construct(HomeRepository $homeRepository, CategoryRepository $categoryRepository)
    {
        $this->homeRepository = $homeRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $data = $this->homeRepository->getAllHome()->toArray();
        $dataCategory = $this->categoryRepository->getAll()->toArray();

        echo '<pre style="color:red";>$data === '; print_r($data);echo '</pre>';
        echo '<pre style="color:red";>$dataCategory === '; print_r($dataCategory);echo '</pre>';

        echo '<h3>Die is Called - index</h3>';die;
    }
}
