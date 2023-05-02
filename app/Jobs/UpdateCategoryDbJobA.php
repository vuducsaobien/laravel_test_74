<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Carbon;

class UpdateCategoryDbJobA implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Số giây job có thể chạy trước khi timeout
     *
     * @var int
     */
    public $timeout = 200;

    private $timeSend = null;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($time)
    {
        $this->timeSend = $time;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Update Category DB here
        // echo '<pre style="color:red";>$this->timeSend === '; print_r($this->timeSend);echo '</pre>';

        $timeNow3 = Carbon::now()->toDateTimeString();

        echo '<pre style="color:red";>$timeNow3 === '; print_r($timeNow3);echo '</pre>';
        echo '<pre style="color:red";>$handle - UpdateCategoryDbJobA 21 === '; echo '</pre>';
    }
}
