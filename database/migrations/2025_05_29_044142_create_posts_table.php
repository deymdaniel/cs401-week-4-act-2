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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('Title')->comment('The title of the post');
            $table->text('Content')->comment('The content of the post');
            $table->String('Slug')->unique()->comment('The unique slug for the post');
            $table->timestamp('Publication_Date')->nullable()->comment('The date and time when the post was published');
            $table->timestamp("Last_modified_date")->nullable()->comment('The date and time when the post was last modified');
            $table->string('Status')->comment('The status of the post (D - Draft, P - Published, I - Inactive)');
            $table->string('Featured_image_url')->comment('The URL of the featured image for the post');
            $table->integer('Views_count')->comment('The number of views the post has received')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
