<?php namespace AppLogger\Logger\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateLogsTable Migration
 *
 * @link https://docs.octobercms.com/3.x/extend/database/structure.html
 */
return new class extends Migration
{
    /**
     * up builds the migration
     */
    public function up()
    {
        Schema::create('applogger_logs', function(Blueprint $table) {
            $table->increments('id'); // REVIEW použi skôr $table->id();
            $table->timestamp('datum_prichodu');
            $table->string('meno_uzivatela');
            $table->integer('meskanie')->default(0);
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::dropIfExists('applogger_logs');
    }
};
