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
 Schema::create('recipes', function (Blueprint $table) {
    $table->id();  
    $table->unsignedBigInteger('user_id')->default(0)->index('recipes_fk1_idx');
    $table->mediumText('title');
    $table->longText('content');
    $table->longText('ingredients');
    $table->decimal('price', 8, 2)->default(0);
    $table->string('url', 200)->unique('url_UNIQUE');
    $table->text('tags')->nullable();
    $table->string('status', 45)->default('published');
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
