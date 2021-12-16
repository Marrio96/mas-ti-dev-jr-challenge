<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->id('id')->primary();
            $table->string('name',100)->nullable()->default('NULL');
            $table->string('last_name',100)->nullable()->default('NULL');
            $table->string('personal_phone',20)->nullable()->default('NULL');
            $table->string('contact_phone',20)->nullable()->default('NULL');
            $table->string('email',100)->nullable()->default('NULL');
            $table->string('gender',1)->nullable()->default('NULL');
            $table->text('address')->nullable();
            $table->string('state',30)->nullable()->default('NULL');
            $table->string('city',80)->nullable()->default('NULL');
            $table->string('suburb',80)->nullable()->default('NULL');
            $table->date('birth_date')->nullable()->default('NULL');
            $table->string('zip_code',8)->nullable();
            $table->string('password',100)->nullable();
            $table->string('avatar',150)->nullable()->default('https://via.placeholder.com/500');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer');
    }
}
