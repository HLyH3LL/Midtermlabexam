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
        Schema::create('librarylogs', function (Blueprint $table) {
            $table->id();
             $table->string('name', 100);
              $table->string('studentnumber', 20);
               $table->string('book', 100);
                $table->date('date');
                 $table->date('returndate');
                  $table->string('status', 20) ->default('Not Returned');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('librarylogs');
    }
};
