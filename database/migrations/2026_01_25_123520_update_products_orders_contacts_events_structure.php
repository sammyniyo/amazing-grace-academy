<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            if (!Schema::hasColumn('products', 'title')) $table->string('title');
            if (!Schema::hasColumn('products', 'slug')) $table->string('slug')->unique();
            if (!Schema::hasColumn('products', 'type')) $table->string('type')->default('album');
            if (!Schema::hasColumn('products', 'format')) $table->string('format')->nullable();
            if (!Schema::hasColumn('products', 'price')) $table->unsignedInteger('price')->default(0);
            if (!Schema::hasColumn('products', 'is_active')) $table->boolean('is_active')->default(true);
            if (!Schema::hasColumn('products', 'description')) $table->text('description')->nullable();
        });

        Schema::table('orders', function (Blueprint $table) {
            if (!Schema::hasColumn('orders', 'product_id')) $table->foreignId('product_id')->constrained()->cascadeOnDelete();
            if (!Schema::hasColumn('orders', 'name')) $table->string('name');
            if (!Schema::hasColumn('orders', 'email')) $table->string('email')->nullable();
            if (!Schema::hasColumn('orders', 'phone')) $table->string('phone')->nullable();
            if (!Schema::hasColumn('orders', 'quantity')) $table->unsignedInteger('quantity')->default(1);
            if (!Schema::hasColumn('orders', 'total_price')) $table->unsignedInteger('total_price')->default(0);
            if (!Schema::hasColumn('orders', 'status')) $table->string('status')->default('pending');
            if (!Schema::hasColumn('orders', 'notes')) $table->text('notes')->nullable();
        });

        Schema::table('contact_messages', function (Blueprint $table) {
            if (!Schema::hasColumn('contact_messages', 'name')) $table->string('name');
            if (!Schema::hasColumn('contact_messages', 'email')) $table->string('email')->nullable();
            if (!Schema::hasColumn('contact_messages', 'phone')) $table->string('phone')->nullable();
            if (!Schema::hasColumn('contact_messages', 'topic')) $table->string('topic')->nullable();
            if (!Schema::hasColumn('contact_messages', 'message')) $table->text('message');
            if (!Schema::hasColumn('contact_messages', 'status')) $table->string('status')->default('new');
            if (!Schema::hasColumn('contact_messages', 'admin_notes')) $table->text('admin_notes')->nullable();
        });

        if (Schema::hasTable('events')) {
            Schema::table('events', function (Blueprint $table) {
                if (!Schema::hasColumn('events', 'title')) $table->string('title');
                if (!Schema::hasColumn('events', 'event_date')) $table->date('event_date')->nullable();
                if (!Schema::hasColumn('events', 'location')) $table->string('location')->nullable();
                if (!Schema::hasColumn('events', 'status')) $table->string('status')->default('upcoming');
                if (!Schema::hasColumn('events', 'description')) $table->text('description')->nullable();
            });
        }
    }

    public function down(): void
    {
        // Non-destructive rollback not attempted to avoid data loss.
    }
};
