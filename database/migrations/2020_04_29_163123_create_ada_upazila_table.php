<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdaUpazilaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ada_upazila', function (Blueprint $table) {
            $table->bigInteger('UpazilaId');
            $table->bigInteger('DivisionCode')->unsigned()->index()->unique();
            $table->bigInteger('DistrictCode')->unsigned()->index()->unique();
            $table->bigInteger('UpazilaCode')->primary()->unsigned()->index()->unique();
            $table->string('UpazilaNameEnglish');
            $table->string('UpazilaNameBangla');
            $table->string('UpazilaImage1');
            $table->string('UpazilaImage2');
            $table->string('Note');
            $table->string('RecordStatus');
            $table->string('RecordVersion');
            $table->string('UserAccess');
            $table->dateTime('AccessDate');
            $table->foreign('DivisionCode')->references('DivisionCode')->on('ada_district')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('DistrictCode')->references('DistrictCode')->on('ada_district')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ada_upazila');
    }
}
