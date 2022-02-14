<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cs', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->string('user_id');
            $table->string('form_id');
            $table->string('file_consumer_dispute_case_form')->nullable();
            $table->string('file_operational_delivery_chronology')->nullable();
            $table->string('file_cs_handling_chronology')->nullable();
            $table->string('file_pod_evidence')->nullable();
            $table->string('file_receipt_proof')->nullable();
            $table->string('file_proof_of_documentation1')->nullable();
            $table->string('file_proof_of_documentation2')->nullable();
            $table->string('file_proof_of_documentation3')->nullable();
            $table->string('file_other_supporting_document')->nullable();
            $table->integer('nominal_indemnity_offer')->nullable();
            $table->integer('note')->nullable();
            $table->string('status');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('form_id')->references('id')->on('frauds')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_operational_delivery_chronology')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_cs_handling_chronology')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_pod_evidence')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_receipt_proof')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_proof_of_documentation1')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_proof_of_documentation2')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_proof_of_documentation3')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_other_supporting_document')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cs');
    }
}
