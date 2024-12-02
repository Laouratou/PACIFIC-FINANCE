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
        // Limiter la longueur de 'queue' à 191 caractères pour l'index
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('queue', 191)->index(); // Limité à 191 caractères
            $table->longText('payload');
            $table->unsignedTinyInteger('attempts');
            $table->unsignedInteger('reserved_at')->nullable();
            $table->unsignedInteger('available_at');
            $table->unsignedInteger('created_at');
        });

        // Limiter la longueur de 'id' à 191 caractères pour la clé primaire
        Schema::create('job_batches', function (Blueprint $table) {
            $table->string('id', 191)->primary(); // Limité à 191 caractères
            $table->string('name');
            $table->integer('total_jobs');
            $table->integer('pending_jobs');
            $table->integer('failed_jobs');
            $table->longText('failed_job_ids');
            $table->mediumText('options')->nullable();
            $table->integer('cancelled_at')->nullable();
            $table->integer('created_at');
            $table->integer('finished_at')->nullable();
        });

        // UUID limité à 191 caractères pour l'unicité
        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 191)->unique(); // Limité à 191 caractères
            $table->text('connection');
            $table->text('queue');
            $table->longText('payload');
            $table->longText('exception');
            $table->timestamp('failed_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
        Schema::dropIfExists('job_batches');
        Schema::dropIfExists('failed_jobs');
    }
};
