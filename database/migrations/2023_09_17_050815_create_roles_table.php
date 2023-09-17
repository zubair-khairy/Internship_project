<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        // Insert an "Administrator" role
        DB::table('roles')->insert([
            'name' => 'Administrator',
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('roles');
    }
};