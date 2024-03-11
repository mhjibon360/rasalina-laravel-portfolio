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
    Schema::create('home_heroes', function (Blueprint $table) {
      $table->id();
      $table->mediumText('title')->nullable();
      $table->mediumText('details')->nullable();
      $table->string('button_text')->nullable();
      $table->mediumText('view_link')->nullable();
      $table->mediumText('image')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('home_heroes');
  }
};
