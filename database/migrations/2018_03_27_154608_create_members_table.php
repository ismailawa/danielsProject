<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('salutation');
            $table->string('firstname');
            $table->string('surname');
            $table->string('othername');
            $table->string('initials');
            $table->string("department");
            $table->string('gender');
            $table->date('dob');
            $table->string('mobile');
            $table->string('email')->unique();
            $table->integer('author_id');
            $table->enum('active', array(0, 1))->default(1);
            $table->enum('print_flag', array(0, 1))->default(0);
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
        Schema::dropIfExists('members');
    }
}
