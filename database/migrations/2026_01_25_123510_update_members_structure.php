<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('members', function (Blueprint $table) {
            if (!Schema::hasColumn('members', 'cohort_id')) {
                $table->foreignId('cohort_id')->nullable()->constrained()->nullOnDelete();
            }
            if (!Schema::hasColumn('members', 'name')) {
                $table->string('name');
            }
            if (!Schema::hasColumn('members', 'email')) {
                $table->string('email')->nullable();
            }
            if (!Schema::hasColumn('members', 'phone')) {
                $table->string('phone')->nullable();
            }
            if (!Schema::hasColumn('members', 'instrument_interest')) {
                $table->string('instrument_interest')->nullable();
            }
            if (!Schema::hasColumn('members', 'voice_part')) {
                $table->string('voice_part')->nullable();
            }
            if (!Schema::hasColumn('members', 'status')) {
                $table->string('status')->default('applied');
            }
            if (!Schema::hasColumn('members', 'notes')) {
                $table->text('notes')->nullable();
            }
        });
    }

    public function down(): void
    {
        Schema::table('members', function (Blueprint $table) {
            $dropCols = ['cohort_id','name','email','phone','instrument_interest','voice_part','status','notes'];
            foreach ($dropCols as $col) {
                if (Schema::hasColumn('members', $col)) {
                    $table->dropColumn($col);
                }
            }
        });
    }
};
