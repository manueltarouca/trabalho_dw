<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {

            // Fields
            $table->id();
            $table->timestamps();
            $table->text('titulo');
            $table->text('descricao');
            $table->integer('classificacao');

            // Foreign keys
            $table->unsignedBigInteger('owner');
            $table->unsignedBigInteger('establecimento');

            // Constraints
            $table->foreign('owner')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('establecimento')->references('id')->on('estabelecimentos')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
