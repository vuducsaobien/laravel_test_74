<?php

namespace App\Http\Services;

use App\Http\Repository\InterfacesRepo\CategoryRepositoryInterface;
use App\Http\Repository\InterfacesRepo\HomeRepositoryInterface;
use App\Jobs\UpdateCategoryDbJob;
use Illuminate\Support\Carbon;

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

    public function updateJob()
    {
        $paramsSend = ['time pass - 1', 'time pass - 12'];
        $emailJob = app()->makeWith(UpdateCategoryDbJob::class, ['time' => $paramsSend]);
        dispatch($emailJob);

        echo '<h3>Die is Called - update category DB - Success 123</h3>';die;
    }
}
