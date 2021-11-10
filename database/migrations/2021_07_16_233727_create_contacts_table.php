<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 40);
            $table->string('middle_name', 40);
            $table->string('last_name', 40);
            $table->enum('honorific', ['Mr', 'Mrs', 'Ms', 'Miss', 'Sir', 'Dr', 'Lord', 'Lady', ]);
            $table->string('suffix', 10);
            $table->string('address', 60);
            $table->string('address2', 60);
            $table->string('city', 50);
            $table->string('state', 30);
            $table->string('zip', 20);
            $table->string('phone_main', 20);
            $table->string('phone_mobile', 20);
            $table->string('phone_alt', 20);
            $table->string('email', 50);
            $table->text('website');
            $table->text('description');
            $table->text('tags');
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
        Schema::dropIfExists('contacts');
    }
}
