<?php

use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
      Schema::create('posts', function (Blueprint $table) {
        $table->id();
        $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
        $table->string('title')->unique();
        $table->string('slug')->unique();
        $table->text('excerpt');
        $table->text('content');
        $table->boolean('published')->default(false);
        $table->unsignedBigInteger('views')->default(0);
        $table->string('image');
        $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
