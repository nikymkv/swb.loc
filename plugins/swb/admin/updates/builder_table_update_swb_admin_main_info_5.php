<?php namespace Swb\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSwbAdminMainInfo5 extends Migration
{
    public function up()
    {
        Schema::table('swb_admin_main_info', function($table)
        {
            $table->string('form_btn', 100);
        });
    }
    
    public function down()
    {
        Schema::table('swb_admin_main_info', function($table)
        {
            $table->dropColumn('form_btn');
        });
    }
}
