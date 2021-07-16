<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('regists_id')->default("P10001");
            $table->string('identity')->default("P10001");
            $table->string('member_email')->default("00-00-00");
            $table->string('phone')->default("P10001");
            $table->string('member_name')->default("P10001");
            $table->string('birthdate')->default("00-00-00");
            $table->string('gender')->default("00-00-00");
            $table->string('address')->default("00-00-00");
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
        Schema::dropIfExists('members');
    }
}
