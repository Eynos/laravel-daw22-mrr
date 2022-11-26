<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pilotos', function (Blueprint $table) {
            $table->datetime('deleted_at')->nullable(true);
        });

        Schema::table('vuelos', function (Blueprint $table) {
            $table->datetime('deleted_at')->nullable(true);
        });

        Schema::table('pasajes', function (Blueprint $table) {
            $table->datetime('deleted_at')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pilotos', function (Blueprint $table) {
            $table->dropColumn('deleted_at');
        });

        Schema::table('vuelos', function (Blueprint $table) {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
        });

        Schema::table('pasajes', function (Blueprint $table) {
            $table->dropColumn('deleted_at');
        });
    }
};
