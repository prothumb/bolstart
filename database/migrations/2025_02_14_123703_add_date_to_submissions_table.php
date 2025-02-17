<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('submissions', function (Blueprint $table) {
            $table->date('date')->after('email'); // Adds "date" column after "email"
        });
    }

    public function down()
    {
        Schema::table('submissions', function (Blueprint $table) {
            $table->dropColumn('date'); // Drops the "date" column if rolled back
        });
    }
};