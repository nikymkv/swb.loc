<?php namespace Swb\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSwbAdminAbout extends Migration
{
    public function up()
    {
        Schema::table('swb_admin_about', function($table)
        {
            $table->string('label_left', 200);
            $table->string('label_right', 200);
            $table->string('between', 50);
            $table->string('location_1', 200);
            $table->string('location_2', 200);
        });
    }
    
    public function down()
    {
        Schema::table('swb_admin_about', function($table)
        {
            $table->dropColumn('label_left');
            $table->dropColumn('label_right');
            $table->dropColumn('between');
            $table->dropColumn('location_1');
            $table->dropColumn('location_2');
        });
    }
}
