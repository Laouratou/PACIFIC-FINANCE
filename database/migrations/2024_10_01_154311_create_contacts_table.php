<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('request_type');
            $table->string('client_type');
            $table->string('product_interest');
            $table->string('nationality');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('city');
            $table->string('neighborhood');
            $table->string('identity_document'); 
            $table->string('supporting_document')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
