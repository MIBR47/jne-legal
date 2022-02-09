<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->string('user_id');
            $table->string('first_party');
            $table->string('second_party');
            $table->string('third_party');
            $table->string('agreement_draft');
            $table->string('addendum');
            $table->string('customer_type');
            $table->string('assurance_goods');
            $table->integer('compensation');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('discount');
            $table->text('other_point');
            $table->string('shipping_type');
            $table->string('shipping_type_description');
            $table->string('file_mom');
            $table->string('file_agreement_draft');
            $table->string('file_claim_form');
            $table->string('file_sk_menkumham');
            $table->string('file_nib');
            $table->string('file_npwp');
            $table->string('file_business_permit');
            $table->string('file_director_id_card');
            $table->string('file_other')->nullable();
            $table->string('status')->default('PENDING');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_mom')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_agreement_draft')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_customer_entity')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_sk_menkumham')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_nib')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_npwp')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_business_permit')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_director_id_card')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_other')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
