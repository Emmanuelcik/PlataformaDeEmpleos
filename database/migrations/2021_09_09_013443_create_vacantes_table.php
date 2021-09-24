<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->timestamps();
        });
        Schema::create('experiencias', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->timestamps();
        });

        Schema::create('ubicacions', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->timestamps();
        });

        Schema::create('salarios', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->timestamps();
        });

        Schema::create('vacantes', function (Blueprint $table) {
            $table->id();
            $table->string("titulo");
            $table->string("skills");
            $table->string("imagen");
            $table->boolean("activa")->default(true);
            $table->text("descripcion");
            $table->foreignId("categoria_id")->references("id")->on("categorias")->onDelete("cascade");
            $table->foreignId("experiencia_id")->references("id")->on("experiencias")->onDelete("cascade");
            $table->foreignId("ubicacion_id")->references("id")->on("ubicacions")->onDelete("cascade");
            $table->foreignId("salario_id")->references("id")->on("salarios")->onDelete("cascade");
            $table->foreignId("user_id")->references("id")->on("users")->onDelete("cascade");
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
        Schema::dropIfExists('vacantes');
        Schema::dropIfExists('experiencias');
        Schema::dropIfExists('ubicacions');
        Schema::dropIfExists('salarios');
        Schema::dropIfExists('categorias');
    }
}
