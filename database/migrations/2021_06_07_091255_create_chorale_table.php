<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChoraleTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('chorale', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('name')->unique();
      $table->string('logo')->default('logo.png');
      $table->string('address1', 255)->nullable();
      $table->string('address2', 255)->nullable();
      $table->text('description')->nullable();
      $table->string('mail')->nullable();
      $table->string('phone1')->nullable();
      $table->string('phone2')->nullable();
      $table->string('website_link')->nullable();
      $table->string('facebook_link')->nullable();
      $table->string('instagram_link')->nullable();

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
    Schema::dropIfExists('chorale');
  }
}
