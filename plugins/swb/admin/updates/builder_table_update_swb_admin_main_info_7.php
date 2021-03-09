<?php namespace Swb\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSwbAdminMainInfo7 extends Migration
{
    public function up()
    {
        Schema::table('swb_admin_main_info', function($table)
        {
            $table->string('pr_title_1', 100);
            $table->string('pr_title_2', 100);
            $table->dropColumn('p_title_1');
            $table->dropColumn('p_title_2');
        });
    }
    
    public function down()
    {
        Schema::table('swb_admin_main_info', function($table)
        {
            $table->dropColumn('pr_title_1');
            $table->dropColumn('pr_title_2');
            $table->string('p_title_1', 100);
            $table->string('p_title_2', 100);
        });
    }
}
