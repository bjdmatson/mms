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
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ledger_id')
              ->constrained()
              ->cascadeOnUpdate()
              ->cascadeonDelete();
            $table->string('title')->comment("The name of section");
            $table->unsignedInteger('budget')->comment("Monetary value stored as cents");
            $table->enum('type', ['expense', 'income']);
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
        Schema::dropIfExists('sections');
    }
};
