<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageAndTextFieldsToInfoComplementairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('info_complementaires', function (Blueprint $table) {
            $table->string('image')->nullable();
            $table->string('texte')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('info_complementaires', function (Blueprint $table) {
            $table->dropColumn('image','texte');

        });
    }
}
