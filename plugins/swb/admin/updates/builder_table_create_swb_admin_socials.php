<?php namespace Swb\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSwbAdminSocials extends Migration
{
    public function up()
    {
        Schema::create('swb_admin_socials', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 100);
            $table->string('url', 200);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('swb_admin_socials');
    }
}
