<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdaCodelistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ada_codelist', function (Blueprint $table) {
            $table->bigInteger('CodeListId');
            $table->bigInteger('CodeListCode')->primary()->unsigned()->index();
            $table->string('CodeListNameEnglish');
            $table->string('CodeListNameBangla');
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
        Schema::dropIfExists('ada_codelist');
    }
}
