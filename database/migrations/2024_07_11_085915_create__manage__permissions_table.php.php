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
        Schema::create('Manage_Permissions', function (Blueprint $table) {
            $table->id();
            $table->integer('PermissionID')->nullable();
            $table->integer('PermissionGroupId')->nullable();
            $table->string('PermissionGroupName');
            $table->string('PermissionName');
            $table->string('PermissionKey')->nullable();
            $table->string('status');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Manage_Permissions');
    }
};
