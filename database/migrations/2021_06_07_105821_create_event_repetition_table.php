<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventRepetitionTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('event_repetition', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->unsignedInteger('event_id');
      $table->string('title')->nullable();
      $table->date('rep_date')->nullable();
      $table->time('rep_time')->nullable();
      $table->string('frequence_en_jrs')->nullable();
      $table->text('description')->nullable();

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
    Schema::dropIfExists('event_repetition');
  }
}
