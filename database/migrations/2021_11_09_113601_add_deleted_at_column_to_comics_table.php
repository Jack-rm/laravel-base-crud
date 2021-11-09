<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeletedAtColumnToComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comics', function (Blueprint $table) {

            $table->softDeletes(); // non elimina completamente l'elemento nella tabella, ma gli attribuisce il dato "deleted_at". Così da poterlo recuperare in caso ce ne sia bisogno.
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comics', function (Blueprint $table) {
            
            $table->dropSoftDeletes();
        });
    }
}
