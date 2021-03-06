<?php namespace Swb\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSwbAdminAbout extends Migration
{
    public function up()
    {
        Schema::create('swb_admin_about', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('left_digit');
            $table->integer('right_digit');
            $table->integer('duration');
            $table->string('text_duration', 100);
            $table->string('url_random', 200);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('swb_admin_about');
    }
}
