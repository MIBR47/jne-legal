<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLegalLitigationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legal_litigations', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->string('user_id');
            $table->string('cs_id');
            $table->string('file_subpoena_response_draft');
            $table->string('case_analysis');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('cs_id')->references('id')->on('cs')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('file_subpoena_response_draft')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('legal_litigations');
    }
}
