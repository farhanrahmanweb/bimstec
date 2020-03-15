<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCttcSubsubgroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cttc_subsubgroups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('title');
            $table->bigInteger('cttc_subgroup_id');
            $table->longText('content');
            $table->string('file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cttc_subsubgroups');
    }
}
