<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('evenement', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('titre')->unique();
      $table->string('sous_titre')->nullable();
      $table->date('date')->nullable();
      $table->time('heure')->nullable();
      $table->boolean('necessite_repetition')->default(false);
      $table->longText('description')->nullable();

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
    Schema::dropIfExists('evenement');
  }
}
