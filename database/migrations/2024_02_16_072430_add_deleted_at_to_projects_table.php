<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeletedAtToProjectsTable extends Migration
{
    /**
     * Run the migrations.
     */
    /**
     * Reverse the migrations.
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->softDeletes(); // Aggiunge la colonna 'deleted_at'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropSoftDeletes(); // Rimuove la colonna 'deleted_at'
        });
    }
};
