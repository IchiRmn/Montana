<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regists', function (Blueprint $table) {
            $table->string('registId', 11)->primary();
            $table->string('users_id', 11);
            $table->string('hikes_id', 11);
            $table->char('payment', 11);
            $table->char('status', 6)->default('Unpaid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regists');
    }
}
