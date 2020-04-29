<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdaAreaTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ada_area_type', function (Blueprint $table) {
            $table->bigInteger('AreaTypeId');
            $table->bigInteger('AreaTypeCode')->primary()->unsigned()->index()->unique();
            $table->string('AreaTypeNameEnglish');
            $table->string('AreaTypeNameBangla');
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
        Schema::dropIfExists('ada_area_type');
    }
}
