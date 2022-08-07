<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('class_id')->nullable()->comment('class Name')->comment('by default it should be no group');
            $table->bigInteger('group_id')->nullable()->default(0);
            $table->string('subject_name')->nullable();
            $table->string('subject_type')->nullable();
            $table->double('pass_mark')->nullable();
            $table->double('full_mark')->nullable();
            $table->string('subject_author')->nullable();
            $table->string('subject_code')->nullable();
            $table->string('book_image')->nullable();
            $table->string('lavel')->nullable()->comment(' primary, school, college');
            $table->tinyInteger('is_graduation')->default(0)->nullable();
            $table->tinyInteger('is_main')->default(0)->nullable();
            $table->tinyInteger('is_optional')->default(0)->nullable();
            $table->longText('note')->nullable();
            $table->tinyInteger('status')->nullable()->default(1);
            $table->string('slug')->nullable();
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
        Schema::dropIfExists('subjects');
    }
}
