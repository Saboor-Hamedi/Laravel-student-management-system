<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_list_tag', function (Blueprint $table) {
            $table->unsignedBigInteger('job_list_id');
            $table->unsignedBigInteger('tag_id');
            $table->foreign('job_list_id')->references('id')->on('joblists')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
            $table->timestamps(); // Optional timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_list_tag');
    }
};
