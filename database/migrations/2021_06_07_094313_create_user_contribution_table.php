<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserContributionTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('user_contribution', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->unsignedInteger('user_id');
      $table->unsignedInteger('contribution_id');

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
    Schema::dropIfExists('user_contribution');
  }
}
