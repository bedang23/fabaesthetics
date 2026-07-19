<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Creates the application's content/lead tables (services, blogs, contacts, forms).
 *
 * These tables pre-existed on the production server (they were created outside of
 * migrations), so every block is guarded with Schema::hasTable() — running this
 * migration on the server is a no-op and will not clobber existing data. It exists
 * so a fresh local database has the schema the frontend/admin expect.
 */
return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('services')) {
            Schema::create('services', function (Blueprint $table) {
                $table->id();
                $table->string('title')->nullable();
                $table->string('seo_title')->nullable();
                $table->string('slug')->nullable();
                $table->string('featured_image')->nullable();
                $table->text('seo_description')->nullable();
                $table->string('category')->nullable();
                $table->longText('content')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('blogs')) {
            Schema::create('blogs', function (Blueprint $table) {
                $table->id();
                $table->string('title')->nullable();
                $table->string('seo_title')->nullable();
                $table->string('slug')->nullable();
                $table->string('featured_image')->nullable();
                $table->text('seo_description')->nullable();
                $table->string('category')->nullable();
                $table->longText('content')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('admin')) {
            Schema::create('admin', function (Blueprint $table) {
                $table->id();
                $table->string('username');
                $table->string('password');
                $table->string('role', 30)->default('admin');
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('contacts')) {
            Schema::create('contacts', function (Blueprint $table) {
                $table->id();
                $table->string('name')->nullable();
                $table->string('email')->nullable();
                $table->string('phone')->nullable();
                $table->text('message')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('forms')) {
            Schema::create('forms', function (Blueprint $table) {
                $table->id();
                $table->string('name')->nullable();
                $table->string('email')->nullable();
                $table->string('phone')->nullable();
                $table->text('message')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('forms');
        Schema::dropIfExists('contacts');
        Schema::dropIfExists('admin');
        Schema::dropIfExists('blogs');
        Schema::dropIfExists('services');
    }
};
