<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCacheExampleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cache_example', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        // Insert some stuff
        DB::table('cache_example')->insert(['name' => 'cache_example - name 1']);
        DB::table('cache_example')->insert(['name' => 'cache_example - name 2']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cache_example');
    }
}
