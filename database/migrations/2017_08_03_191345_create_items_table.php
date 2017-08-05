<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create("item_types", function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 20)->unique();
        });

        Schema::create("item_infos", function (Blueprint $table) {
            $table->increments('id');
            $table->integer('item_type_id');
            $table->string('title');
            $table->string('description');
            $table->char('isbn', 13)->nullable();
            $table->integer('price')->nullable();
            $table->string('author');
            $table->timestamps();

            $table->foreign('item_type_id')->references('id')->on('item_types');
            $table->boolean('nsfw')->default('FALSE');
        });

        Schema::create('item_states', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 20)->unique();
        });

        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('item_info_id');
            $table->integer('item_state_id');
            $table->integer('user_id');
            $table->boolean('allow_borrow')->default('FALSE');
            $table->timestamps();

            $table->foreign('item_info_id')->references('id')->on('item_infos');
            $table->foreign('item_state_id')->references('id')->on('item_states');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
        Schema::dropIfExists('item_states');
        Schema::dropIfExists('item_infos');
        Schema::dropIfExists('item_types');
    }
}
