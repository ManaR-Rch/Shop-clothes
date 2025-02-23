<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('description');
            $table->string('image')->nullable(); // Image facultative
            $table->string('categorie');
            $table->string('lieu');
            $table->date('date_perdu_trouve');
            $table->string('contact_email');
            $table->string('contact_telephone');
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relation avec User
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annonces');
    }
};
