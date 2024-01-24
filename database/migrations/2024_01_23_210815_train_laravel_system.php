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
        Schema::create('Treni', function (Blueprint $tabella){
            $tabella->char('Azienda', 100);
            $tabella->char('Stazione di Partenza',255);
            $tabella->char('Stazione di Arrivo',255);
            $tabella->dateTime('Orario di Partenza');
            $tabella->dateTime('Orario di Arrivo');
            $tabella->string('Codice Treno',10);
            $tabella->integer('Numero Carrozze', 7);
            $tabella->boolean('In orario');
            $tabella->boolean('Cancellato');
            $tabella->timestamps();
           
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
//creati due file manualmente su php my admin