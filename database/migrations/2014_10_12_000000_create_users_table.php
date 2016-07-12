<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $field) {
            $field->increments('id');
            $field->unsignedInteger('roles_id')->nullable();
            $field->string('username')->unique();;
            $field->string('name');
            $field->string('email')->unique();
            $field->string('password');
            $field->rememberToken();
            $field->timestamps();
        });

        Schema::create('roles', function (Blueprint $field) {
            $field->increments('id');
            $field->string('namaRule');
        });

        Schema::table('users', function (Blueprint $field) {
            $field  ->foreign('roles_id')
                    ->references('id')
                    ->on('roles')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
        Schema::drop('roles');
    }
}
