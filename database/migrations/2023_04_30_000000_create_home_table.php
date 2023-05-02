<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHomeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('hidden');
        });

        // Insert some stuff
        DB::table('home')->insert(['name' => 'home - name 1','hidden' => 'home - hidden 1']);
        DB::table('home')->insert(['name' => 'home - name 2','hidden' => 'home - hidden 2']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home');
    }
}
