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
        Schema::table("users", function (Blueprint $table) {
            // $table->timestamp("email_verified_at")->nullable()->comment("Email verification timestamp");
            $table->timestamp("registration_date")->comment("User registration date");
            $table->timestamp("last_login_date")->nullable()->comment("Last login date");
            $table->dropTimestamps();
        });
    }  
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("users", function (Blueprint $table) {
            // $table->dropColumn("email_verified_at");
            $table->dropColumn("registration_date");
            $table->dropColumn("last_login_date");
            $table->timestamps(); // Re-add created_at and updated_at
        });
    }
};
