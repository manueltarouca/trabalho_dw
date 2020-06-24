<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstabelecimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estabelecimentos', function (Blueprint $table) {

            // Fields
            $table->id();
            $table->timestamps();
            $table->string('nome',100);
            $table->text('descricao');
            $table->string("localizacao");
            $table->string('estado',100);
            $table->string('imagem',100);

            // Foreign keys
            $table->unsignedBigInteger('owner');
            $table->unsignedBigInteger('categoria');
            $table->unsignedBigInteger('cidade');

            // Constraints
            $table->foreign('owner')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('categoria')->references('id')->on('categorias')->onDelete('cascade');
            $table->foreign('cidade')->references('id')->on('cidades')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estabelecimentos');
    }
}
