<?php namespace Swb\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSwbAdminMainInfo6 extends Migration
{
    public function up()
    {
        Schema::table('swb_admin_main_info', function($table)
        {
            $table->string('p_title_1', 100);
            $table->string('p_title_2', 100);
            $table->string('w_title_1', 100);
            $table->string('w_title_2', 100);
        });
    }
    
    public function down()
    {
        Schema::table('swb_admin_main_info', function($table)
        {
            $table->dropColumn('p_title_1');
            $table->dropColumn('p_title_2');
            $table->dropColumn('w_title_1');
            $table->dropColumn('w_title_2');
        });
    }
}
