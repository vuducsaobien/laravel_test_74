<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCacheRedisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cache_redis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        // Insert some stuff
        DB::table('cache_redis')->insert(['name' => 'cache_redis - name 1']);
        DB::table('cache_redis')->insert(['name' => 'cache_redis - name 2']);
        DB::table('cache_redis')->insert(['name' => 'cache_redis - name 3']);
        DB::table('cache_redis')->insert(['name' => 'cache_redis - name 4']);
        DB::table('cache_redis')->insert(['name' => 'cache_redis - name 5']);
        DB::table('cache_redis')->insert(['name' => 'cache_redis - name 6']);
        DB::table('cache_redis')->insert(['name' => 'cache_redis - name 7']);
        DB::table('cache_redis')->insert(['name' => 'cache_redis - name 8']);
        DB::table('cache_redis')->insert(['name' => 'cache_redis - name 9']);
        DB::table('cache_redis')->insert(['name' => 'cache_redis - name 10']);
        DB::table('cache_redis')->insert(['name' => 'cache_redis - name 11']);
        DB::table('cache_redis')->insert(['name' => 'cache_redis - name 12']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cache_redis');
    }
}
