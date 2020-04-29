<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdaDistrictTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ada_district', function (Blueprint $table) {
            $table->bigInteger('DistrictId');
            $table->bigInteger('DivisionCode')->unsigned()->index()->unique();
            $table->bigInteger('DistrictCode')->primary()->unsigned()->index()->unique();
            $table->string('DistrictNameEnglish');
            $table->string('DistrictNameBangla');
            $table->string('DistrictImage1');
            $table->string('DistrictImage2');
            $table->string('Note');
            $table->string('RecordStatus');
            $table->string('RecordVersion');
            $table->string('UserAccess');
            $table->dateTime('AccessDate');
            $table->foreign('DivisionCode')->references('DivisionCode')->on('ada_division')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ada_district');
    }
}
