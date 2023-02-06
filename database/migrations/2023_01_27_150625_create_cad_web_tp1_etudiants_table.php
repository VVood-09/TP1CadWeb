<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCadWebTp1EtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('cad_web_tp1_etudiants', function (Blueprint $table) {
            $table->id();
            // nom
            $table->string('nom', 100);
            // adresse
            $table->string('adresse', 255);
            // telephone
            $table->string('telephone', 20);
            // courriel https://laravel.com/docs/9.x/migrations#creating-indexes
            $table->string('courriel', 100)->unique();
            // date de naissance
            $table->date('date_de_naissance');
            // villeId
            // https://laravel.com/docs/8.x/migrations#foreign-key-constraints
            $table->foreignId('ville_id')->constrained('cad_web_tp1_villes');
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
        Schema::dropIfExists('cad_web_tp1_etudiants');
    }
}
