<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('cohorts', function (Blueprint $table) {
            if (!Schema::hasColumn('cohorts', 'name')) {
                $table->string('name')->after('id');
            }
            if (!Schema::hasColumn('cohorts', 'code')) {
                $table->string('code')->unique()->after('name');
            }
            if (!Schema::hasColumn('cohorts', 'start_date')) {
                $table->date('start_date')->nullable()->after('code');
            }
            if (!Schema::hasColumn('cohorts', 'end_date')) {
                $table->date('end_date')->nullable()->after('start_date');
            }
            if (!Schema::hasColumn('cohorts', 'location')) {
                $table->string('location')->nullable()->after('end_date');
            }
            if (!Schema::hasColumn('cohorts', 'status')) {
                $table->string('status')->default('upcoming')->after('location');
            }
            if (!Schema::hasColumn('cohorts', 'capacity')) {
                $table->unsignedInteger('capacity')->default(30)->after('status');
            }
            if (!Schema::hasColumn('cohorts', 'description')) {
                $table->text('description')->nullable()->after('capacity');
            }
        });
    }

    public function down(): void
    {
        Schema::table('cohorts', function (Blueprint $table) {
            $dropCols = ['name','code','start_date','end_date','location','status','capacity','description'];
            foreach ($dropCols as $col) {
                if (Schema::hasColumn('cohorts', $col)) {
                    $table->dropColumn($col);
                }
            }
        });
    }
};
