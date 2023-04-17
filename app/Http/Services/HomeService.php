<?php

namespace App\Http\Services;

use App\Http\Repository\InterfacesRepo\CategoryRepositoryInterface;
use App\Http\Repository\InterfacesRepo\HomeRepositoryInterface;

class HomeService
{
    private $homeRepository;
    private $categoryRepository;

    public function __construct(
        HomeRepositoryInterface $homeRepository,
        CategoryRepositoryInterface $categoryRepository
    ){
        $this->homeRepository = $homeRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function calcule()
    {

        $dataHome = $this->homeRepository->getHome()->toArray();
        $dataCategory = $this->categoryRepository->getCategory()->toArray();

        return [$dataHome, $dataCategory];
    }


}
