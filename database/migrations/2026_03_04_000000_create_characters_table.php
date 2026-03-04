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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
        
            // Basic info
            $table->string('name')->index();
            $table->string('title')->default('Original');

            $table->string('character_image')->nullable();
            $table->unsignedTinyInteger('rarity')->index();
            $table->date('release_date')->index();
            $table->unsignedInteger('game_id_number')->unique();

            // Aptitude values
            $table->enum('turf', ['S','A','B','C','D','E','F','G']);
            $table->enum('dirt', ['S','A','B','C','D','E','F','G']);
            $table->enum('sprint', ['S','A','B','C','D','E','F','G']);
            $table->enum('mile', ['S','A','B','C','D','E','F','G']);
            $table->enum('medium', ['S','A','B','C','D','E','F','G']);
            $table->enum('long', ['S','A','B','C','D','E','F','G']);
            $table->enum('front', ['S','A','B','C','D','E','F','G']);
            $table->enum('pace', ['S','A','B','C','D','E','F','G']);
            $table->enum('late', ['S','A','B','C','D','E','F','G']);
            $table->enum('end', ['S','A','B','C','D','E','F','G']);

            // Stat bonuses
            $table->unsignedTinyInteger('bonus_speed')->default(0);
            $table->unsignedTinyInteger('bonus_stamina')->default(0);
            $table->unsignedTinyInteger('bonus_power')->default(0);
            $table->unsignedTinyInteger('bonus_guts')->default(0);
            $table->unsignedTinyInteger('bonus_wit')->default(0);

            $table->timestamps();

            $table->unique(['name', 'title']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};

