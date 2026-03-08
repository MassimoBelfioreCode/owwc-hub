<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamMatchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_match', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
            $table
            ->foreignId('team_id')
            ->constrained('teams')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table
            ->foreignId('match_id')
            ->constrained('matches')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->unique(['match_id', 'team_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team_match');
    }
}
