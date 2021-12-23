<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("table_id");
            $table->timestamp('start_time')->useCurrent();
            $table->timestamp('end_time');
            $table->timestamps();

            $table->foreign('user_id')
            ->references('id')
            ->on('users');
           

            $table->foreign('table_id')
            ->references('id')
            ->on('tables');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
