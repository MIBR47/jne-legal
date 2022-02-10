<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusPermitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_permits', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->string('permit_id');

            $table->string('status_permit_type')->nullable();
            $table->string('status_location')->nullable();
            $table->string('status_specification')->nullable();
            $table->text('status_application_reason')->nullable();
            $table->string('status_file_disposition')->nullable();
            $table->string('status_file_document1')->nullable();
            $table->string('status_file_document2')->nullable();
            $table->string('status_file_document3')->nullable();

            $table->timestamps();

            $table->foreign('permit_id')->references('id')->on('permits')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('status_permits');
    }
}
