<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leases', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->string('user_id');
            $table->string('first_party');
            $table->string('second_party');
            $table->string('third_party');
            $table->string('agreement_draft');
            $table->string('addendum');
            $table->integer('rantal_value');
            $table->string('rental_address');
            $table->string('regional');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('deposit');
            $table->integer('deposit_amount');
            $table->text('other_point');
            $table->string('landlord_type');
            $table->string('file_director_disposition');
            $table->string('file_internal_memo');
            $table->string('file_id_card');
            $table->string('file_npwp');
            $table->string('file_kk');
            $table->string('file_mariagge_book');
            $table->string('file_director_id_card');
            $table->string('file_deed');
            $table->string('file_sk_menkumham');
            $table->string('file_business_permit');
            $table->string('file_nib');
            $table->string('file_npwp_company');
            $table->string('file_location_permit');
            $table->string('file_setificate');
            $table->string('file_imb');
            $table->string('file_sppt1');
            $table->string('file_sppt2');
            $table->string('file_sppt3');
            $table->string('file_procuration');
            $table->string('file_previous_agreement');
            $table->string('file_director_procuration');
            $table->string('status')->default('PENDING');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_director_disposition')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_internal_memo')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_id_card')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_npwp')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_kk')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_mariagge_book')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_director_id_card')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_deed')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_sk_menkumham')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_business_permit')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_nib')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_npwp_company')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_location_permit')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_setificate')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_imb')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_sppt1')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_sppt2')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_sppt3')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_procuration')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_previous_agreement')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('file_director_procuration')->references('id')->on('upload_files')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leases');
    }
}
