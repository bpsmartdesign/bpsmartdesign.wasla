<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('user_details', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->unsignedInteger('user_id');
      $table->enum('sexe', ['m', 'f'])->nullable();
      $table->string('phone1', 50)->nullable();
      $table->string('phone2', 50)->nullable();
      $table->string('photo')->default('pp.png');
      $table->string('address1', 255)->nullable();
      $table->string('address2', 255)->nullable();

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
    Schema::dropIfExists('user_details');
  }
}
