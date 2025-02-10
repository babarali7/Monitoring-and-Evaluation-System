<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCreatedbyUpdatedbyFieldsToInstitutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('institutes', function (Blueprint $table) {
            $table->smallInteger("created_by")->nullable()->default(null);
            $table->smallInteger("updated_by")->nullable()->default(null);
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
