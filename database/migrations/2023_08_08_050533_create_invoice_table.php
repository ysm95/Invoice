<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invoice', function (Blueprint $table) {
            $table->id();
            $table->date('booking_date');
            $table->string('passenger_name');
            $table->string('package_name');
            $table->integer('adults');
            $table->integer('children');
            $table->integer('infants');
            $table->string('email');
            $table->integer('rooms');
            $table->integer('nights');
            $table->string('destenation_from');
            $table->string('destenation_to');
            $table->float('total_in_currency');
            $table->string('currency');
            $table->float('omr_rate', 8, 3);
            $table->integer('number_of_tickets');
            $table->double('ticket_fare');
            $table->double('ticket_taxes');
            $table->string('tickets_vat');
            $table->string('hotel_name');
            $table->float('hotel_net_range', 6, 3);
            $table->float('hotel_vat_charge', 4, 2);
            $table->bigInteger('hotel_confirmation_id');
            $table->float('transfer_net_rate', 4, 2);
            $table->float('transfer_vat_charge', 4, 2);
            $table->bigInteger('transfer_confirmation_id');
            $table->float('tour_net_rate', 4, 2);
            $table->float('tour_vat_charge', 4, 2);
            $table->bigInteger('tour_confirmation_id');
            $table->float('lounge_net_rate', 4, 2);
            $table->float('lounge_vat_charge', 4, 2);
            $table->bigInteger('lounge_confirmation_id');
            $table->float('visa_net_rate', 4, 2);
            $table->string('visa_vat');
            $table->float('visa_service_charge', 4, 2);
            $table->string('visa_vat_service_charge');
            $table->bigInteger('visa_confirmation_id');
            $table->float('mark_up', 4, 2);
            $table->float('total_in_omr', 6, 3);
            $table->float('holidays_profit', 6, 3);
            $table->float('total_vat', 6, 3);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice');
    }
};
