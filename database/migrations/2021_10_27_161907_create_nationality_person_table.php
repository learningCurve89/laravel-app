<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNationalityPersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nationality_person', function (Blueprint $table) {
            $table->primary(['person_id', 'nationality_id']);
            $table->unsignedBigInteger('person_id');
            $table->unsignedBigInteger('nationality_id');
            $table
                ->foreign('person_id')
                ->references('id')
                ->on('people')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table
                ->foreign('nationality_id')
                ->references('id')
                ->on('nationalities')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nationality_person');
    }
}
