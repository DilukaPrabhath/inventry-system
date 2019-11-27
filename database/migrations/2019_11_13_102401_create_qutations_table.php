<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQutationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qutations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('qutationsid');
            $table->text('customer_name');
            $table->text('po_number');
            $table->text('dilivary_number');
            $table->text('price');
            $table->text('status');
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
        Schema::dropIfExists('qutations');
    }
}
