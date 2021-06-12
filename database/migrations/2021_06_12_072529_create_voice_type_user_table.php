<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoiceTypeUserTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('voice_type_user', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->unsignedInteger('user_id');
      $table->unsignedInteger('voice_type_id');

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
    Schema::dropIfExists('voice_type_user');
  }
}
