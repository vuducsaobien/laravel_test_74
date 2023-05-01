<?php

namespace App\Http\Services;

use App\Http\Repository\InterfacesRepo\CategoryRepositoryInterface;
use App\Http\Repository\InterfacesRepo\HomeRepositoryInterface;
use App\Jobs\UpdateCategoryDbJob;
use Illuminate\Contracts\Queue\Factory;
use Illuminate\Support\Carbon;

// use Illuminate\Contracts\Container\Container;
// use Illuminate\Contracts\Container\Factory;
use Illuminate\Contracts\Queue\Queue;
class HomeService
{
    private $homeRepository;
    private $categoryRepository;

    private $updateJobService;
    private $timeJob;

    protected $queueService;

    public function __construct(
        HomeRepositoryInterface $homeRepository,
        CategoryRepositoryInterface $categoryRepository
        // UpdateCategoryDbJob $updateCategoryDbJob
        // Factory $queueService
    ){

        // $updateJob = app()->make(UpdateCategoryDbJob::class, ['time' => $timeNow]);

        // echo '<pre style="color:red";>$timeJob === '; print_r($timeJob);echo '</pre>';
        // echo '<h3>Home service - updateJob 11</h3>';die;

        $this->homeRepository = $homeRepository;
        $this->categoryRepository = $categoryRepository;
        // $this->updateJobService = $updateCategoryDbJob;

        // echo '<h3>Home service - updateJob 11</h3>';die;

        // $timeNow1 = Carbon::now()->toDateTimeString();

        // $this->updateJob = $updateCategoryDbJob($timeNow);
        // $this->timeJob = Carbon::now()->toDateTimeString();

        // Truyền $params vào AppServiceProvider
        // $container->bindParams(UpdateCategoryDbJob::class, [
        //     'time' => $this->timeJob
        // ]);
    }

    public function calcule()
    {

        $dataHome = $this->homeRepository->getHome()->toArray();
        $dataCategory = $this->categoryRepository->getCategory()->toArray();

        return [$dataHome, $dataCategory];
    }

    public function updateJob()
    {
        // echo '<h3>Home service - updateJob</h3>';die;

        $timeNow1 = Carbon::now()->toDateTimeString();

        // // $ccc = $this->updateJobService;

        // echo '<pre style="color:red";>$timeNow 1 - controlller === '; print_r($timeNow1);echo '</pre>';
        // // $emailJob = ($this->updateJobService($timeNow1))->delay(Carbon::now()->addSeconds(3));
        // $emailJob = ($this->updateJobService)->delay(Carbon::now()->addSeconds(3));
        // $emailJob = (UpdateCategoryDbJob::class)->delay(Carbon::now()->addSeconds(3));
        $emailJob = (new UpdateCategoryDbJob(['time pass - 1', 'time pass - 2']))->delay(Carbon::now()->addSeconds(3));


        // $emailJob = ($this->updateJobService);


        // $emailJob = (new UpdateCategoryDbJob($timeNow1));

        dispatch($emailJob);
        echo '<h3>Die is Called - update category DB - Success 123</h3>';die;


        // echo '<pre style="color:red";>$this->updateJobService === '; print_r($this->updateJobService);echo '</pre>';

        // $timeJob = Carbon::now()->toDateTimeString();


        // $emailJob = app()->makeWith(UpdateCategoryDbJob::class, ['time' => $timeJob])->delay(Carbon::now()->addSeconds(3));
        // $emailJob = app()->makeWith(UpdateCategoryDbJob::class, $timeJob)->delay(Carbon::now()->addSeconds(3));

        // $emailJob = ($this->updateJobService->setParams($this->timeJob))->delay(Carbon::now()->addSeconds(3));

        // $job = $this->updateJobService->onQueue('default')->delay(Carbon::now()->addSeconds(3));

        // $this->queueService->push($job);

        // dispatch($job);
        echo '<h3>Die is Called - update category DB - Success</h3>';die;
    }
}
