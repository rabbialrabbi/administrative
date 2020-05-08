<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdaAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ada_area', function (Blueprint $table) {
            $table->bigInteger('AreaId');
            $table->unsignedBigInteger('DivisionCode');
            $table->unsignedBigInteger('DistrictCode');
            $table->unsignedBigInteger('UpazilaCode');
            $table->unsignedBigInteger('AreaTypeCode');
            $table->unsignedBigInteger('AreaCode')->primary();
            $table->string('Area_Dept_Code1');
            $table->string('Area_Dept_Code2');
            $table->string('AreaNameEnglish');
            $table->string('AreaNameBangla');
            $table->string('AreaImage1');
            $table->string('AreaImage2');
            $table->string('Note');
            $table->string('RecordStatus');
            $table->string('RecordVersion');
            $table->string('UserAccess');
            $table->dateTime('AccessDate');
            $table->foreign('DivisionCode')->references('DivisionCode')->on('ada_division')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('DistrictCode')->references('DistrictCode')->on('ada_district')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('UpazilaCode')->references('UpazilaCode')->on('ada_upazila')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('AreaTypeCode')->references('AreaTypeCode')->on('ada_area_type')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ada_area');
    }
}
