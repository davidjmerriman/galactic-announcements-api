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
        Schema::create('authors', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->timestamps();
        });

        Schema::table('announcements', function (Blueprint $table) {
            $table->addColumn('integer', 'author_id');
            $table->dropColumn('author');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('authors');

        Schema::table('announcements', function (Blueprint $table) {
            $table->addColumn('text', 'author');
            $table->dropColumn('author_id');
        });
    }
};
