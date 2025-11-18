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
        Schema::create('workers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();

             $table->foreignId('service_id')->constrained('services');

            $table->string('experience_years');
            $table->text('bio');
            $table->foreignId('province_id')->nullable()->constrained('provinces')->nullOnDelete();
            
            $table->decimal('latitude');
            $table->decimal('longitude');
            $table->date('execution_date');
            $table->boolean('status')->default(true);
            
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workers');
    }
};
