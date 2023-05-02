<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Carbon;

class UpdateCategoryDbJobC implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Số giây job có thể chạy trước khi timeout
     *
     * @var int
     */
    public $timeout = 200;

    public $tries = 3;

    private $timeSend = null;

    public static $messageResultABC = [];

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
        $timeNow2 = Carbon::now()->toDateTimeString();

        // if ($this->attempts() !== $this->tries) {
        //     self::$messageResultABC[] = 'Job C - Error - ' . $timeNow2;
        //     $fff = 3 / 0; // Error
        // } else {
            self::$messageResultABC[] = 'Job C - Success - ' . $timeNow2;
        // }

        echo '<pre style="color:red";>$message === '; print_r(self::$messageResultABC);echo '</pre>';    
    }
}
