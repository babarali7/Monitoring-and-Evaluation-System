<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutes', function (Blueprint $table) {
            $table->increments('inst_id');
            $table->unsignedBigInteger('districts_id');
            $table->string('ddo_code')->nullable();
            $table->string('inst_name');
            $table->tinyInteger('type');
            $table->date('date_of_establishment')->nullable();
            $table->string('building_status', 20)->nullable();
            $table->string('tot_building_area')->nullable();
            $table->string('covered_area')->nullable();
            $table->integer('trades_offered')->nullable();
            $table->string('ins_gender', 10)->nullable();
            $table->integer('technology_offered')->nullable();
            $table->integer('tot_teaching_staff')->nullable();
            $table->integer('tot_managerial_staff')->nullable();
            $table->integer('no_of_classrooms')->nullable();
            $table->integer('no_of_labs')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->timestamps();

            $table->foreign('districts_id')
            ->references('id')
            ->on('districts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institutes');
    }
}
