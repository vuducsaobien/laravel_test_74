<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Repository\InterfacesRepo\CategoryRepositoryInterface;
use App\Http\Repository\InterfacesRepo\HomeRepositoryInterface;

class HomeController extends Controller
{
    private $homeRepository;
    private $categoryRepository;

    /**
     * @var HomeRepositoryInterface|\App\Repository\InterfacesRepo\Repository
     * @var CategoryRepositoryInterface|\App\Repository\InterfacesRepo\Repository
     */
    public function __construct(
        HomeRepositoryInterface $homeRepository,
        CategoryRepositoryInterface $categoryRepository
    ){
        $this->homeRepository = $homeRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $dataHome = $this->homeRepository->getHome()->toArray();
        $dataCategory = $this->categoryRepository->getCategory()->toArray();

        echo '<pre style="color:red";>$dataHome === '; print_r($dataHome);echo '</pre>';
        echo '<pre style="color:red";>$dataCategory === '; print_r($dataCategory);echo '</pre>';

        echo '<h3>Die is Called - index</h3>';die;
    }
}
