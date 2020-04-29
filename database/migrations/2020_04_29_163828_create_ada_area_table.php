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
            $table->bigInteger('DivisionCode')->unsigned()->index();
            $table->bigInteger('DistrictCode')->unsigned()->index();
            $table->bigInteger('UpazilaCode')->unsigned()->index();
            $table->bigInteger('AreaTypeCode')->unsigned()->index();
            $table->bigInteger('AreaCode')->primary()->unsigned()->index();
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
            $table->foreign('DivisionCode')->references('DivisionCode')->on('ada_upazila')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('DistrictCode')->references('DistrictCode')->on('ada_upazila')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('UpazilaCode')->references('UpazilaCode')->on('ada_upazila')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('AreaTypeCode')->references('AreaTypeCode')->on('ada_area_type')->onDelete('cascade')->onUpdate('cascade');
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
