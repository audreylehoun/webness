<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('p_libelle');
            $table->text('p_description');
            $table->decimal('p_prixancien');
           
            $table->text('p_image1');
            $table->text('p_image2')->nullable();
            $table->timestamps();
            $table->bigInteger('p_cathegorie_id')->unsigned();
            $table->foreign('p_cathegorie_id')->references('id')->on('cathegories')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produits');
    }
}
