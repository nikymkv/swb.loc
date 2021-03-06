<?php namespace Swb\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSwbAdminCondition extends Migration
{
    public function up()
    {
        Schema::create('swb_admin_condition', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('location', 200);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('swb_admin_condition');
    }
}
