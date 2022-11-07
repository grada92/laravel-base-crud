<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics_tables', function (Blueprint $table) {
            $table->id();
            $table->string('Titolo', 200);
            $table->string('Copertina', 200);
            $table->string('type', 200);
            $table->text('Description', 400);
            $table->string('Series', 200)->nullable();
            $table->boolean('Venduto')->default(false);
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
        Schema::dropIfExists('comics_tables');
    }
}
