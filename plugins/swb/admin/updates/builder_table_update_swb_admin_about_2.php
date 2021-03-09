<?php namespace Swb\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSwbAdminAbout2 extends Migration
{
    public function up()
    {
        Schema::table('swb_admin_about', function($table)
        {
            $table->string('title_1', 200);
            $table->string('title_2', 200);
        });
    }
    
    public function down()
    {
        Schema::table('swb_admin_about', function($table)
        {
            $table->dropColumn('title_1');
            $table->dropColumn('title_2');
        });
    }
}
