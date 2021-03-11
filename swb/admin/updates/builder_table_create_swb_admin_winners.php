<?php namespace Swb\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSwbAdminWinners extends Migration
{
    public function up()
    {
        Schema::create('swb_admin_winners', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('nickname', 200);
            $table->string('title', 200);
            $table->string('by_give', 200);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('swb_admin_winners');
    }
}
