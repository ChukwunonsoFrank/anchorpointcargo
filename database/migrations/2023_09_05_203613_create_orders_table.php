<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('sender_fullname')->nullable();
            $table->string('sender_email')->nullable();
            $table->string('sender_phone')->nullable();
            $table->string('sender_residential')->nullable();
            $table->string('receiver_fullname')->nullable();
            $table->string('receiver_email')->nullable();
            $table->string('receiver_phone')->nullable();
            $table->string('receiver_residential')->nullable();
            $table->string('package_image')->nullable();
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->string('packaging')->nullable();
            $table->string('carrier')->nullable();
            $table->string('carrier_reference')->nullable();
            $table->text('status')->nullable();
            $table->text('status_description')->nullable();
            $table->string('package_quantity')->nullable();
            $table->string('total_freight')->nullable();
            $table->string('weight')->nullable();
            $table->string('star_points')->nullable();
            $table->string('shipment_mode')->nullable();
            $table->timestamp('depature_date')->nullable();
            $table->timestamp('delivery_date')->nullable();
            $table->timestamp('pickup_date')->nullable();
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
        Schema::dropIfExists('orders');
    }
};
