<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstrumentTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('instrument', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('nom')->unique();
      $table->text('description')->nullable();
      $table->unsignedInteger('quantite')->default(0);
      $table->enum('status', ['good', 'medium', 'bad', 'unusable'])->default('good');

      $table->unsignedInteger('created_by_user_id');
      $table->softDeletes();
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
    Schema::dropIfExists('instrument');
  }
}
