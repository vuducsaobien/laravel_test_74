<?php

use App\Http\Models\CacheRedisModel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        factory(CacheRedisModel::class, 10000)->create();




    }
}
