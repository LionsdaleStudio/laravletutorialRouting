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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->longText("content");
            $table->foreignId("user_id");
            $table->foreignId("shoe_id");
            $table->integer("upvote");
            $table->integer("downvote");            
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId("created_by")->nullable()->references("id")->on("users");
            $table->foreignId("updated_by")->nullable()->references("id")->on("users");
            $table->foreignId("deleted_by")->nullable()->references("id")->on("users");
 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
