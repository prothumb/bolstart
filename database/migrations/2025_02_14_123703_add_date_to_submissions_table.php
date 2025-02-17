<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('submissions', function (Blueprint $table) {
            $table->date('date')->after('email'); // Adds "date" column after "email"

            if (!Schema::hasColumn('submissions', 'created_at')) {
                $table->timestamps(); // Adds "created_at" and "updated_at"
            }
        });
    }

    public function down()
    {
        Schema::table('submissions', function (Blueprint $table) {
            $table->dropColumn('date'); // Drops "date" column
            $table->dropTimestamps();  // Drops "created_at" and "updated_at"
        });
    }
};
