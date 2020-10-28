<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
           $table->string('strProductName');
           $table->string('strProductDesc');
           $table->string('strProductCode');
           $table->timestamps('dtmAdded');
           $table->timestamps('dtmDiscontinued');
           $table->timestamps('stmTimestamp');
           $table->text('details');
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
        Schema::dropIfExists('products');
    }
}
