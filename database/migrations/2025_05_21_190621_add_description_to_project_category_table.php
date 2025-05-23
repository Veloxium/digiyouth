<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('project_category', function (Blueprint $table) {
            $table->text('description')->after('category_name');
        });
    }

    public function down(): void
    {
        Schema::table('project_category', function (Blueprint $table) {
            $table->dropColumn('description');
        });
    }
};
