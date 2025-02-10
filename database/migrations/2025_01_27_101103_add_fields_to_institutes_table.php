<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToInstitutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('institutes', function (Blueprint $table) {
            $table->integer('tehsil_id')->nullable()->default(null);
            $table->boolean('active')->nullable();
            $table->string('uncovered_area')->nullable()->default(null);
            $table->boolean('uncovered_area_type')->nullable()->default(null);
            $table->text('address')->nullable()->default(null);
            $table->string('phone_no')->nullable()->default(null);
            $table->string('location',15)->nullable()->default(null)->comment('Urban,rural');
            $table->string('institute_season',20)->nullable()->default(null)->comment('Summer,Winter,Both');
            $table->string('national_constituency_no',10)->nullable()->default(null);
            $table->string('provincial_constituency_no',10)->nullable()->default(null);
            $table->date('year_new_construction')->nullable()->default(null);
            $table->string('internet_facility',3)->nullable()->default(null);
            $table->string('biometric_installed',3)->nullable()->default(null);
            $table->string('ins_map')->nullable()->default(null);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('institutes', function (Blueprint $table) {
            //
        });
    }
}
