<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Repository\HomeRepository;
use App\Http\Repository\CategoryRepository;
use App\Http\Repository\CategoryRepositoryInterface;

class HomeController extends Controller
{
    private $homeRepository;
    // private $categoryRepository;
    protected $categoryRepository;


    // public function __construct(HomeRepository $homeRepository, CategoryRepository $categoryRepository)
    // public function __construct(HomeRepository $homeRepository, CategoryRepositoryInterface $categoryRepository)

    /**
     * @var CategoryRepositoryInterface|\App\Repository\Repository
     */
    public function __construct(
        CategoryRepositoryInterface $categoryRepository
    )
    {
        // $this->homeRepository = $homeRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        // $data = $this->homeRepository->getAllHome()->toArray();
        // $dataCategory = $this->categoryRepository->getAll()->toArray();
        $dataCategory = $this->categoryRepository->getCategory()->toArray();

        // echo '<pre style="color:red";>$data === '; print_r($data);echo '</pre>';
        echo '<pre style="color:red";>$dataCategory === '; print_r($dataCategory);echo '</pre>';

        echo '<h3>Die is Called - index</h3>';die;
    }
}
