<?php namespace Swb\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSwbAdminWinners4 extends Migration
{
    public function up()
    {
        Schema::table('swb_admin_winners', function($table)
        {
            $table->string('by_url', 200);
        });
    }
    
    public function down()
    {
        Schema::table('swb_admin_winners', function($table)
        {
            $table->dropColumn('by_url');
        });
    }
}
