<?php namespace Swb\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSwbAdminMainInfo extends Migration
{
    public function up()
    {
        Schema::create('swb_admin_main_info', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('quote', 200);
            $table->string('quote_author', 100);
            $table->string('description', 200);
            $table->string('place', 200);
            $table->string('interesting_title1', 200);
            $table->string('interesting_title2', 200);
            $table->string('interesting_desc1', 200);
            $table->string('interesting_desc2', 200);
            $table->string('feedback_title', 200);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('swb_admin_main_info');
    }
}
