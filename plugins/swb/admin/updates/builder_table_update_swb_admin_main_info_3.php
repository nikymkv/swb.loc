<?php namespace Swb\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSwbAdminMainInfo3 extends Migration
{
    public function up()
    {
        Schema::table('swb_admin_main_info', function($table)
        {
            $table->string('block_class', 100);
        });
    }
    
    public function down()
    {
        Schema::table('swb_admin_main_info', function($table)
        {
            $table->dropColumn('block_class');
        });
    }
}
