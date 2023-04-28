<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Carbon;

class UpdateCategoryDbJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Số giây job có thể chạy trước khi timeout
     *
     * @var int
     */
    public $timeout = 200;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($time)
    {
        //
        // echo '<pre style="color:red";>$time === '; print_r($time);echo '</pre>';

        $timeNow2 = Carbon::now()->toDateTimeString();
        echo '<pre style="color:red";>$timeNow 2 === '; print_r($timeNow2);echo '</pre>';
        echo '<pre style="color:red";>$contruct - UpdateCategoryDbJob === '; echo '</pre>';
        echo '<h3>Die is Called - 123</h3>';die;

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Update Category DB here
        echo '<pre style="color:red";>$handle - UpdateCategoryDbJob === '; echo '</pre>';
        echo '<h3>Die is Called - 123</h3>';die;

    }
}
