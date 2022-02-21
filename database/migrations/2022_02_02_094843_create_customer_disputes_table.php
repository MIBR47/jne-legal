<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerDisputesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_disputes', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->string('user_id');
            $table->date('date');
            $table->string('case_type');
            $table->string('causative_factor');
            $table->string('causative_factor_others')->nullable();
            $table->string('total_loss');
            $table->string('connote');
            $table->date('incident_date');
            $table->string('customer');
            $table->string('shipping_type');
            $table->boolean('assurance');
            $table->text('incident_chronology');
            $table->string('shipping_form');
            $table->string('detail_shipping_form');
            $table->string('file_witness_testimony');
            $table->string('file_letter_document');
            $table->string('file_claim_form_document');
            $table->string('file_other_document')->nullable();
            $table->string('file_evidence');
            $table->string('file_document_completeness');
            $table->string('file_other_evidence')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_shipping_form')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_witness_testimony')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_letter_document')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_claim_form_document')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_other_document')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_evidence')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_document_completeness')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('customer_disputes');
    }
}
