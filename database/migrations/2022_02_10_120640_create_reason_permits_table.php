<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReasonPermitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reason_permits', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->string('permit_id');

            $table->string('reason_permit_type')->nullable();
            $table->string('reason_location')->nullable();
            $table->string('reason_specification')->nullable();
            $table->text('reason_application_reason')->nullable();
            $table->string('reason_file_disposition')->nullable();
            $table->string('reason_file_document1')->nullable();
            $table->string('reason_file_document2')->nullable();
            $table->string('reason_file_document3')->nullable();

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
        Schema::dropIfExists('reason_permits');
    }
}
