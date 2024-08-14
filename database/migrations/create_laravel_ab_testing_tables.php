<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('experiments')) {
            Schema::create('experiments', function (Blueprint $table) {
                $table->id();
                $table->string('name')->unique();
                $table->integer('visitors')->unsigned()->default(0);
                $table->integer('engagement')->unsigned()->default(0);
                $table->boolean('is_active')->default(true);
                $table->timestamps();
            });
        }

        if (! Schema::hasTable('goals')) {
            Schema::create('goals', function (Blueprint $table) {
                $table->id();
                $table->string('name')->unique();
                $table->foreignId('experiment_id')->constrained('experiments')->onDelete('cascade');
                $table->integer('count')->unsigned()->default(0);
                $table->boolean('is_active')->default(true);
                $table->unique(['name', 'experiment']);
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('experiments');
        Schema::dropIfExists('goals');
    }
};
