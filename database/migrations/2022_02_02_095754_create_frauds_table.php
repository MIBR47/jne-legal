<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFraudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frauds', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->string('user_id');
            $table->date('date');
            $table->string('case_type');
            $table->string('causative_factor');
            $table->string('perpetrator');
            $table->string('unit');
            $table->integer('total_loss');
            $table->date('incident_date');
            $table->string('incident_scane');
            $table->text('incident_chronology');
            $table->string('fraud_classification');
            $table->string('witness1');
            $table->string('witness1_department');
            $table->string('witness2');
            $table->string('witness2_department');
            $table->string('file_document_proof');
            $table->string('file_perpetrator_statement');
            $table->string('file_witness_statement');
            $table->string('file_other')->nullable();
            $table->string('file_evidence_documentation');
            $table->string('file_investigation_document');
            $table->string('file_other_evidence')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_document_proof')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_perpetrator_statement')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_witness_statement')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_other')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_evidence_documentation')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_investigation_document')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_other_evidence')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('frauds');
    }
}
