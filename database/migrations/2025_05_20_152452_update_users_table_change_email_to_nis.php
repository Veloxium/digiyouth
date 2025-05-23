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
        Schema::table('users', function (Blueprint $table) {
            // Ganti email menjadi nis
            $table->dropUnique(['email']);
            $table->dropColumn('email');
            $table->dropColumn('email_verified_at');
            $table->string('nis')->unique()->after('name');
            $table->string('class')->after('nis');

            // Tambah kolom profile_pic dan bio
            $table->string('profile_picture')->nullable()->after('password');
            $table->text('bio')->nullable()->after('profile_picture');
        });

        // Kalau perlu, kamu bisa juga ubah tabel password_reset_tokens agar pakai nis
        Schema::table('password_reset_tokens', function (Blueprint $table) {
            $table->dropPrimary();
            $table->dropColumn('email');
            $table->string('nis')->primary();
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Rollback ke email
            $table->dropUnique(['nis']);
            $table->dropColumn('nis');
            $table->string('email')->unique()->after('name');
            $table->timestamp('email_verified_at')->nullable()->after('email');

            // Hapus kolom tambahan
            $table->dropColumn(['class', 'profile_picture', 'bio']);
        });

        Schema::table('password_reset_tokens', function (Blueprint $table) {
            $table->dropPrimary();
            $table->dropColumn('nis');
            $table->string('email')->primary();
        });
    }
};
