<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_technology', function (Blueprint $table) {
            $table->id();

            $table->foreignId('project_id')->constrained();
            $table->foreignId('technology_id')->constrained();

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
        Schema::table('project_technology', function (Blueprint $table) {
            $table->dropForeign(['project_id']);
            $table->dropForeign(['technology_id']);
        });

        Schema::table('project_technologie', function (Blueprint $table) {
            $table->dropColumn('project_id');
            $table->dropColumn('project_technology_project_id_foreign');

            $table->dropForeign('project_technology_id_foreign');
            $table->dropColumn('technologie_id');
        });
    }
};
