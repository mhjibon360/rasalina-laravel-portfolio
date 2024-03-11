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
    Schema::create('footers', function (Blueprint $table) {
      $table->id();
      $table->string('contact_title')->nullable();
      $table->string('contact_number')->nullable();
      $table->string('contact_details')->nullable();
      $table->string('address_title')->nullable();
      $table->string('address_name')->nullable();
      $table->string('address_location')->nullable();
      $table->string('address_email')->nullable();
      $table->string('follow_title')->nullable();
      $table->string('follow_big_title')->nullable();
      $table->string('follow_details')->nullable();
      $table->string('footer_title')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('footers');
  }
};
