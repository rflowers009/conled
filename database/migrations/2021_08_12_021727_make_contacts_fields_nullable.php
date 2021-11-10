<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeContactsFieldsNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->string('middle_name', 40)->nullable()->change();
            $table->string('suffix', 10)->nullable()->change();
            $table->string('address', 60)->nullable()->change();
            $table->string('address2', 60)->nullable()->change();
            $table->string('city', 50)->nullable()->change();
            $table->string('state', 30)->nullable()->change();
            $table->string('zip', 20)->nullable()->change();
            $table->string('phone_main', 20)->nullable()->change();
            $table->string('phone_mobile', 20)->nullable()->change();
            $table->string('phone_alt', 20)->nullable()->change();
            $table->string('email', 50)->nullable()->change();
            $table->text('website')->nullable()->change();
            $table->text('description')->nullable()->change();
            $table->text('tags')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contacts', function (Blueprint $table) {
            //
        });
    }
}
