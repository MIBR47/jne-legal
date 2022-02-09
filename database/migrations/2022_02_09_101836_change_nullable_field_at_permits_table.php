<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeNullableFieldAtPermitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('permits', function (Blueprint $table) {
            $table->text('note')->nullable()->change();
            $table->string('latest_photo')->nullable()->change();
            $table->string('status')->default('PENDING')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('permits', function (Blueprint $table) {
            $table->text('note')->nullable(false)->change();
            $table->string('latest_photo')->nullable(false)->change();
            $table->string('status')->change();
        });
    }
}
