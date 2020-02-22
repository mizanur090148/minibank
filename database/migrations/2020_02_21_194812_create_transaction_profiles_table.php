<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tp_no')->nullable();
            $table->date('inquiry_date')->nullable();
            $table->string('inquiry_reference_no')->nullable();
            $table->string('item_particulars')->nullable();
            $table->string('applicant')->nullable();
            $table->string('lc_issuing_bank')->nullable();
            $table->string('beneficiary')->nullable();
            $table->string('beneficiary_bank')->nullable();
            $table->string('swift_code')->nullable();
            $table->string('proforma_invoice_no')->nullable();
            $table->string('invoice_value')->nullable();
            $table->string('shipment_date')->nullable();
            $table->string('part_shipment')->nullable();
            $table->string('port_of_loading')->nullable();
            $table->string('port_of_discharge')->nullable();
            $table->string('tenure_of_upas')->nullable();
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedInteger('deleted_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction_profiles');
    }
}
