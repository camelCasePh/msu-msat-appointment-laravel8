<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //    'slotID',
        // 'slotSize',
        // 'slotStartDate',
        // 'SlotEndDate',
        // 'slotStatus',
        Schema::create('slots', function (Blueprint $table) {
            $table->id('slotId');
             $table->integer('slotSize')->nullable();
             $table->dateTime('slotStartDate');
             $table->dateTime('slotEndDate');
             $table->string('slotStatus');
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
        Schema::dropIfExists('slots');
    }
}
