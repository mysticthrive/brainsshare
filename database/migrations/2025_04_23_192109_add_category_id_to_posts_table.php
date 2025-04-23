<?php

use App\Models\Category;
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
      Schema::table('posts', function (Blueprint $table) {
        $table->foreignIdFor(Category::class)->after('id')->constrained()->cascadeOnDelete();
      });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
      Schema::table('posts', function (Blueprint $table) {
        $table->dropForeign(['category_id']);
        $table->dropColumn('category_id');
      });
    }
};
