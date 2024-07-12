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
        Schema::create('roles', function (Blueprint $table) {
            
                $table->id(); // Role_ID as primary key
                $table->integer('User_Type_ID'); // User_Type_ID as a foreign key (make sure the corresponding table exists)
                $table->string('Division'); // Division column
                $table->string('Role_Name'); 
                $table->string('User_Type');// Role_Name column
                $table->String('Role_Status'); // Role_Status column, assuming it's a boolean (active/inactive)
                $table->timestamps(); // created_at and updated_at timestamps
         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
