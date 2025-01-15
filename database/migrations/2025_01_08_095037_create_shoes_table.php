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
        Schema::create('shoes', function (Blueprint $table) {
            $table->id();
            $table->string("name")->unique();
            $table->double("price")->nullable();
            $table->integer("quantity");
            $table->boolean("limited")->default(false);
            $table->timestamps(); //Created_at, Updated_at
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
        Schema::dropIfExists('shoes');
    }
};
