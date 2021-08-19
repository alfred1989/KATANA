<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAwariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('awaries', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->timestamp('data_zgloszenia')->nullable()->default(null);;
            $table->timestamp('data_start')->nullable()->default(null);
            $table->timestamp('data_stop')->nullable()->default(null);;
            $table->string('user_zglaszajacy',255);
            $table->string('opis',255);
            $table->string('numer_maszyny',255);
            $table->string('przydzielony_user_UR',255);
            $table->string('rodzaj_zgloszenia',255);
            $table->string('priorytet',255);
            $table->string('uwagi_user_UR',255);
            $table->timestamp('data_zawieszenia')->nullable()->default(null);;
            $table->timestamp('data_wznowienia')->nullable()->default(null);;
            $table->string('przekazano_UR',255);
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
        Schema::dropIfExists('awarie');
    }


}
