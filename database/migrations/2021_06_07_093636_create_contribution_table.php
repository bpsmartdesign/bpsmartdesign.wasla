<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContributionTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('contribution', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('name')->unique();
      $table->text('description')->nullable();
      $table->enum('status', ['pending', 'confirmed', 'cancelled', 'closed'])->default('pending');
      $table->date('date_fin');
      $table->float('montant')->default(0)->nullable();

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
    Schema::dropIfExists('contribution');
  }
}
