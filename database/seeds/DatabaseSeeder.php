<?php

use App\Http\Models\CacheRedisModel;
use App\Http\Models\Table1Model;
use App\Http\Models\Table2Model;
use App\Http\Models\Table3Model;
use App\Http\Models\Table4Model;

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

        // factory(CacheRedisModel::class, 10000)->create();

        // factory(Table1Model::class, 20)->create();
        // factory(Table2Model::class, 30)->create();

        factory(Table3Model::class,5)->create();
        factory(Table4Model::class, 50)->create();

    }
}
