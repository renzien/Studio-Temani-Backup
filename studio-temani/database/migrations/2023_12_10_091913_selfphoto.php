<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('selfphotos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('tag1');
            $table->text('desc1');
            $table->string('tag2');
            $table->text('desc2');
            $table->string('unit1');
            $table->string('price1');
            $table->string('descprice1');
            $table->string('unit2');
            $table->string('price2');
            $table->string('descprice2');
            $table->string('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('selfphotos');
    }
};
