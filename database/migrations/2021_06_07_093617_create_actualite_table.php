<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActualiteTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('actualite', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->unsignedInteger('user_id');
      $table->string('titre')->unique();
      $table->string('sous_titre')->nullable();
      $table->enum('status', ['draft', 'is_ok', 'is_online'])->default('draft');
      $table->longText('contenu')->nullable();

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
    Schema::dropIfExists('actualite');
  }
}
