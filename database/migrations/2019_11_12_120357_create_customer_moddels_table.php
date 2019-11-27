<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerModdelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_moddels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->text('city');
            $table->text('telephone');
            $table->text('email');
            $table->text('number');
            $table->text('road');
            $table->text('details');
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
        Schema::dropIfExists('customer_moddels');
    }
}
