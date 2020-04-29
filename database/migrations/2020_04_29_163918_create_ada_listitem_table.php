<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdaListitemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ada_listitem', function (Blueprint $table) {
            $table->bigInteger('ListItemId');
            $table->bigInteger('CodeListCode')->unsigned()->index()->unique();
            $table->bigInteger('ListItemCode')->primary()->unsigned()->index()->unique();
            $table->string('ListItemNameEnglish');
            $table->string('ListItemNameBangla');
            $table->string('Note');
            $table->string('RecordStatus');
            $table->string('RecordVersion');
            $table->string('UserAccess');
            $table->dateTime('AccessDate');
            $table->foreign('CodeListCode')->references('CodeListCode')->on('ada_codelist')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ada_listitem');
    }
}
