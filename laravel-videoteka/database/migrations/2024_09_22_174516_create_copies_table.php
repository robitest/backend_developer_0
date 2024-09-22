<?php

use App\Models\Movie;
use App\Models\Format;
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
        Schema::create('copies', function (Blueprint $table) {
            $table->id();
            $table->string('barcode', 50);
            $table->unsignedTinyInteger('available')->default(1);
            $table->foreignIdFor(Movie::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Format::class)->constrained();
            $table->timestamps();
            $table->unique(['id', 'barcode']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('copies');
    }
};
