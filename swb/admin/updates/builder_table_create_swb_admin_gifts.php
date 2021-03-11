<?php namespace Swb\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSwbAdminGifts extends Migration
{
    public function up()
    {
        Schema::create('swb_admin_gifts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 200);
            $table->string('desc', 200);
            $table->string('url', 200);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('swb_admin_gifts');
    }
}
