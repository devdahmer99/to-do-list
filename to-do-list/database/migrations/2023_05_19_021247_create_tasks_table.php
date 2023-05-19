<?php

use App\Models\Category;
use App\Models\User;
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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(false);
            $table->dateTime('due_date');
            $table->string('description', 255);
            $table->foreignIdFor(User::class)->references('id')->on('users')
                    ->onDelete('CASCADE');
            $table->foreignIdFor(Category::class)->references('id')->on('categories')
                    ->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function(Blueprint $table) {
            $table->dropForeignIdFor(User::class);
        });
        Schema::table('categories', function(Blueprint $table) {
            $table->dropForeignIdFor(Category::class);
        });
        Schema::dropIfExists('tasks');
    }
};
