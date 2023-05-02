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

    /**
     * The number of times the job may be attempted.
     *
     * @var int
     */
    public $tries = 3;

    private $timeSend = null;

    public static $messageResultABC = [];

    public $retryAfter = 5; // second after failed job

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

        if ($this->attempts() !== $this->tries) {
            self::$messageResultABC[] = 'Job B - Error - ' . $timeNow2;
            $fff = 3 / 0; // Error
        } else {
            self::$messageResultABC[] = 'Job B - Success - ' . $timeNow2;
        }

        echo '<pre style="color:red";>$message === '; print_r(self::$messageResultABC);echo '</pre>';    
    }
}
