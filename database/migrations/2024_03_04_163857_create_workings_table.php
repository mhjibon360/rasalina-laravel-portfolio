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
    Schema::create('workings', function (Blueprint $table) {
      $table->id();
      $table->string('small_title')->nullable();
      $table->string('title')->nullable();
      $table->mediumText('details')->nullable();
      $table->string('icon')->nullable();
      $table->integer('status')->default('1');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('workings');
  }
};
