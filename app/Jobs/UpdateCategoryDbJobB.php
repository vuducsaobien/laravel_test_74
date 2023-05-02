<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Carbon;

class UpdateCategoryDbJobB implements ShouldQueue
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
    public function __construct()
    {
        // $this->timeSend = $time;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $fff = 3 / 0;
        $message = 'job B - handle';
        echo '<pre style="color:red";>$message === '; print_r($message);echo '</pre>';

    }
}
