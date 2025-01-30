<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntryUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entry_users', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('email',255);
            $table->string('password',255);
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('update_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entry_users');
    }
}
