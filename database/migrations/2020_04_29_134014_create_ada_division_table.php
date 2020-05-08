<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdaDivisionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ada_division', function (Blueprint $table) {
            $table->bigInteger('DivisionId');
            $table->unsignedBigInteger('DivisionCode')->primary();
            $table->string('DivisionNameEnglish');
            $table->string('DivisionNameBangla');
            $table->string('DivisionImage1');
            $table->string('DivisionImage2');
            $table->string('Note');
            $table->string('RecordStatus');
            $table->string('RecordVersion');
            $table->string('UserAccess');
            $table->dateTime('AccessDate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ada_division');
    }
}
