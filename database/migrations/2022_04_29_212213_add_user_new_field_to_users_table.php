<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserNewFieldToUsersTable extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->tinyInteger('document_type')->after('remember_token');
            $table->string('document_number', 100)->nullable()->after('document_type');
            $table->boolean('is_admin')->default(false)->after('document_number');
            $table->string('api_token', 80)->after('is_admin')->unique()->nullable();

        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['document_type', 'document_number', 'is_admin']);
        });
    }
}
